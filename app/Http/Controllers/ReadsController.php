<?php

namespace App\Http\Controllers;

use App\Models\Read;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReadsController extends Controller
{
    public function read($id){

        $all_reads = Read::all();
        $has = 0;
        foreach ($all_reads as $object){
            if($object->post_id == $id && $object->user_id == auth()->user()->id){
                $has = 1;
            }
        }
        if($has == 0) {
            $read_post = new Read;
            $read_post->post_id = $id;
            $read_post->user_id = auth()->user()->id;
            $read_post->finished = 1;
            $read_post->save();
            //d($read_post);
            return Redirect::back()->with('success', 'Įrašas perskaitytas');
        }
        else {
            $has = 0;
            return Redirect::back()->with('error', 'Įrašas jau buvo perskaitytas');
        }
    }
}
