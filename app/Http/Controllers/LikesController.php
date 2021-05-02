<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LikesController extends Controller
{
    public function like($id){

        $liked_post = Post::find($id);
        $liked_post->likes++;
        $liked_post->save();

        $all_likes = Like::all();
        $has = 0;
        foreach ($all_likes as $object){
            if($object->post_id == $id && $object->user_id == auth()->user()->id){
                $has = 1;
                return Redirect::back()->with('error', 'Įrašas jau patinka!');
            }
        }
        if($has == 0) {
            $liked_post = new Like;
            $liked_post->post_id = $id;
            $liked_post->user_id = auth()->user()->id;
            $liked_post->liked = 1;
            $liked_post->save();
            //d($read_post);
            return Redirect::back()->with('success', 'Įrašas patiko!');
        }

    }
}
