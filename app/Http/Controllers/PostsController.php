<?php

namespace App\Http\Controllers;

use App\Models\Read;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        $reads = Read::all();
        //return view('posts.index')->with('posts', $posts);
        return view('posts.index', ['posts'=>$posts, 'reads'=>$reads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get jus extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        // Create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Irašas sukurtas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Neleistina prieeiga');
        }

        return view ('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);


        // Handle file upload
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get jus extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();



        return redirect('/posts')->with('success', 'Irašas Redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Neleistina prieeiga');
        }

        if($post->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();

        //Deleting "Read" table records of that post
        $all_read = Read::all();
        foreach ($all_read as $read){
            if($read->post_id == $post->id){
                $read->delete();
            }
        }

        $user = auth()->user();
        $user->progress--;
        $user->save();

        return redirect('/posts')->with('success', 'Irašas sėkmingai ištrintas');
    }

}
