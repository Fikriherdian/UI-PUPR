<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "jadwals";
    protected $fillable = ['id','judul','date','status'];
    public $timestamps = false;
}