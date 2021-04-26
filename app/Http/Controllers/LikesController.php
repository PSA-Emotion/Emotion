<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LikesController extends Controller
{
    public function like($id){

        $liked_post = Post::find($id);
        $liked_post->likes++;
        $liked_post->save();

        return Redirect::back()->with('success', 'Įrašas patinko');
    }
}
