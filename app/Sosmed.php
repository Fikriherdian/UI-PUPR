<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $table = "sosmeds";
    protected $fillable = ['id','icon','nama','link','status'];
    public $timestamps = false;
}
