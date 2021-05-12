<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutes extends Model
{
    use HasFactory;

    protected $table = 'mutes';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
