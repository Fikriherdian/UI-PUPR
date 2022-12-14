<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = "pages";
    protected $fillable = ['id','nama','slug','parents','link','deskripsi','status','urutan','belakang','priv'];
    public $timestamps = false;
}
