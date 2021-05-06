<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = "galeris";
    protected $fillable = ['id','photo','caption','status'];
    public $timestamps = false;
}

