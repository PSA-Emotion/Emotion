<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //dd($request);
        $sum = 0;
        $sum = $sum+$request->input('one');
        $sum = $sum+$request->input('two');
        $sum = $sum+$request->input('three');
        $sum = $sum+$request->input('four');
        $sum = $sum+$request->input('five');
        $sum = $sum+$request->input('six');
        $sum = $sum+$request->input('seven');
        $sum = $sum+$request->input('eight');
        $sum = $sum+$request->input('nine');
        $sum = $sum+$request->input('ten');

        //dd($sum);
        $user = User::find($id);
        if($sum >= 0 && $sum <= 5){
            $user->relationship_level = 'Depresijos nėra';

        }
        if($sum >= 0 && $sum <= 39){
            $user->relationship_level = 'Grėsminga situacija';
        }
        if($sum >= 40 && $sum <= 59){
            $user->relationship_level = 'Prastas';
        }
        if($sum >= 60 && $sum <= 79){
            $user->relationship_level = 'Vidutinis';
        }
        if($sum >= 80 && $sum <= 100){
            $user->relationship_level = 'Puikus';
        }
        //dd($user);
        $user->save();
        $sum = 0;

        return redirect('/profile')->with('success', 'Testas atliktas');
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
