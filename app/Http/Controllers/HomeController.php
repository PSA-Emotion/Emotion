<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Read;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //counting progress
        $all_read = Read::all();
        $posts = Post::all()->count();
        $sum = 0;
        $summ = 0;
        foreach ($all_read as $read){
            if($read->user_id == $user->id){
                $summ++;
            }
        }

        if($user->depression_level == 'Depresijos nėra'){
            $sum = $sum+20;
        }
        if($user->depression_level == 'Normos ribos, tačiau nelaimingas'){
            $sum = $sum+16;
        }
        if($user->depression_level == 'Lengva depresija'){
            $sum = $sum+12;
        }
        if($user->depression_level == 'Vidutinė depresija'){
            $sum = $sum+8;
        }
        if($user->depression_level == 'Sunki depresija'){
            $sum = $sum+4;
        }
        if($user->tired_level == 'Vidutinis'){
            $sum = $sum+7;
        }
        if($user->tired_level == 'Lengvas nuovargis'){
            $sum = $sum+14;
        }
        if($user->tired_level == 'Nuovargio nėra'){
            $sum = $sum+20;
        }
        if($user->relationship_level == 'Prastas'){
            $sum = $sum+7;
        }
        if($user->relationship_level == 'Vidutinis'){
            $sum = $sum+14;
        }
        if($user->relationship_level == 'Puikus'){
            $sum = $sum+20;
        }

        $add_to_progress = ($summ/$posts*40)+$sum;
        $user->progress = $add_to_progress;
        $user->save();
        return view('profile')->with('posts', $user->posts);
    }

    public function admin()
    {
        if(auth()->user()->status == 'admin') {
            $reviews = Review::all();
            return view('pages.admin')->with('reviews', $reviews);
        }
        else return redirect('/dashboard')->with('error', 'Prieeiga neleistina');
    }

    public function adminUsers()
    {
        if (auth()->user()->status == 'admin') {
            $users = User::all();
            return view('adminUsers')->with('users', $users);

        }
        else return redirect('/dashboard')->with('error', 'Prieeiga neleistina');
    }

    public function adminVip()
    {
        if (auth()->user()->status == 'admin') {
            $users = User::all();
            return view('adminVip')->with('users', $users);

        }
        else return redirect('/dashboard')->with('error', 'Prieeiga neleistina');
    }

    public function depressionTest()
    {
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            return view('depressionTest')->with('user', $user);
    }

    public function relationshipTest()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('relationshipTest')->with('user', $user);
    }

    public function tiredTest()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('tiredTest')->with('user', $user);
    }
}
