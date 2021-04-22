<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            return view('pages.admin');
        }
        else return redirect('/dashboard')->with('error', 'Prieeiga neleistina');
    }

    public function adminUsers()
    {
        $users = User::all();
        return view('adminUsers')->with('users', $users);
    }

    public function adminVip()
    {
        $users = User::all();
        return view('adminVip')->with('users', $users);
    }
}
