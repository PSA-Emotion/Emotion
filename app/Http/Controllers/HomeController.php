<?php

namespace App\Http\Controllers;

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
}
