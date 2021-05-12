<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReportsController extends Controller
{
    public function report($id){

        $reported_post = Post::find($id);
        $reported_post->reports++;
        $reported_post->save();

        $all_reports = Report::all();
        $has = 0;
        foreach ($all_reports as $object){
            if($object->post_id == $id && $object->user_id == auth()->user()->id){
                $has = 1;
            }
        }
        if($has == 0) {
            $report_post = new Report();
            $report_post->post_id = $id;
            $report_post->user_id = auth()->user()->id;
            $report_post->finished = 1;
            $report_post->save();
            //d($read_post);
            return Redirect::back()->with('success', 'Apie įrašą pranešta');
        }
        else {
            $has = 0;
            return Redirect::back()->with('error', 'Apie įrašą jau buvo pranešta!');
        }
    }
}
