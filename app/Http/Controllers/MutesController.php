<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MutesController extends Controller
{
    public function mute($id){

        $user=User::find($id);
        $user->muted = 1;
        $user->save();

        return Redirect::back()->with('success', 'Vartotojas užtildytas');
    }

    public function unmute($id){

        $user=User::find($id);
        $user->muted = 0;
        $user->save();

        return Redirect::back()->with('success', 'Vartotojas atitildytas');
    }
}
