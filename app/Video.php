<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "video";
    protected $fillable = ['id','kanan','kiri'];
    public $timestamps = false;
}
