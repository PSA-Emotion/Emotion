<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bans extends Model
{
    use HasFactory;

    protected $table = 'bans';
    //Primary key
    public $primaryKey = 'id';
    //Timestamp
    public $timestamps = true;
}
