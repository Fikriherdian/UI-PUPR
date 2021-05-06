<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = "aplikasis";
    protected $fillable = ['id','photo','nama','link','status'];
    public $timestamps = false;
}
