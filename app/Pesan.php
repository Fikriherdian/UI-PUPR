<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = "pesans";
    protected $fillable = ['id','nama','email','masukan','status'];
    public $timestamps = false;
}
