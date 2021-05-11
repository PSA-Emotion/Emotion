<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BansController extends Controller
{
    public function ban($id){

        $user=User::find($id);
        $user->banned = 1;
        $user->save();

        return Redirect::back()->with('success', 'Vartotojas užblokuotas');
    }

    public function unban($id){

        $user=User::find($id);
        $user->banned = 0;
        $user->save();

        return Redirect::back()->with('success', 'Vartotojas atblokuotas');
    }
}
