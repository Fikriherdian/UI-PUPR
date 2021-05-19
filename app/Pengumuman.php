<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = "pengumumans";
    protected $fillable = ['id','judul','page','slug','status'];
    public $timestamps = false;
}
