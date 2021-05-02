<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function isRead(){
        return Read::where(['post_id'=>$this->id,'user_id'=>auth()->user()->id])->exists();
    }
    public function isLiked(){
        return Like::where(['post_id'=>$this->id,'user_id'=>auth()->user()->id])->exists();
    }
}
