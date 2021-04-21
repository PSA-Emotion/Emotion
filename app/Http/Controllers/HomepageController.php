<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homepage;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Homepage::find(1);
        //dd($home);
        return view('homepageEdit')->with('home', $home);
        //return View::first(['homepageEdit', 'dashboard'], $home);
    }

    public function send(){
        $home = Homepage::find(1);
        return view('dashboard')->with('home', $home);

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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);


        // Handle file upload
        if($request->hasFile('homepage_image')){
            //Get file name with the extension
            $filenameWithExt= $request->file('homepage_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get jus extension
            $extension = $request->file('homepage_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('homepage_image')->storeAs('public/homepage_images', $fileNameToStore);
        }

        // Create post
        $home = Homepage::find($id);
        $home->title = $request->input('title');
        $home->body = $request->input('body');
        if($request->hasFile('homepage_image')){
            $home->homepage_image = $fileNameToStore;
        }
        $home->save();



        return redirect('/dashboard')->with('success', 'Pagrindinis puslapis Redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
