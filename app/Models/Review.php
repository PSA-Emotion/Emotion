<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
