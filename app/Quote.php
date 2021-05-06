<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = "quotes";
    protected $fillable = ['id','posisi','photo','quote','nama','status'];
    public $timestamps = false;
}
