<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DepressionController extends Controller
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
        $sum = $sum+$request->input('eleven');
        $sum = $sum+$request->input('twelve');
        $sum = $sum+$request->input('thirteen');
        $sum = $sum+$request->input('fourteen');
        $sum = $sum+$request->input('fifteen');
        $sum = $sum+$request->input('sixteen');
        $sum = $sum+$request->input('seventeen');
        $sum = $sum+$request->input('eighteen');
        $sum = $sum+$request->input('nineteen');
        $sum = $sum+$request->input('twenty');
        $sum = $sum+$request->input('twentyone');
        $sum = $sum+$request->input('twentytwo');
        $sum = $sum+$request->input('twentythree');
        $sum = $sum+$request->input('twentyfour');
        $sum = $sum+$request->input('twentyfive');
        //dd($sum);
        $user = User::find($id);
        if($sum >= 0 && $sum <= 5){
            $user->depression_level = 'Depresijos nėra';
        }
        if($sum >= 6 && $sum <= 10){
            $user->depression_level = 'Normos ribos, tačiau nelaimingas';
        }
        if($sum >= 11 && $sum <= 25){
            $user->depression_level = 'Lengva depresija';
        }
        if($sum >= 26 && $sum <= 50){
            $user->depression_level = 'Vidutinė depresija';
        }
        if($sum >= 51 && $sum <= 75){
            $user->depression_level = 'Sunki depresija';
        }
        if($sum >= 76 && $sum <= 100){
            $user->depression_level = 'Itin sunki depresija';
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
