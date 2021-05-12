<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\Read;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VipPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->status == 'vip') {
            $posts = Post::where('reports', '>', 2)->orderBy('reports', 'desc')->simplePaginate(3);
            return view('vipPosts')->with('posts', $posts);
        }
        else return redirect('/dashboard')->with('error', 'Prieeiga neleistina');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

        if($post->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        //Deleting "Read" table records of that post
        $all_read = Read::all();
        foreach ($all_read as $read){
            if($read->post_id == $post->id){
                $read->delete();
            }
        }

        //Deleting "Report" table records of that post
        $all_reports = Report::all();
        foreach ($all_reports as $report){
            if($report->post_id == $post->id){
                $report->delete();
            }
        }

        //Deleting "Likes" table records of that post
        $all_likes = Like::all();
        foreach ($all_likes as $like){
            if($like->post_id == $post->id){
                $like->delete();
            }
        }

        $post->delete();
        return redirect('/vipPosts')->with('success', 'Irašas sėkmingai ištrintas');
    }
}
