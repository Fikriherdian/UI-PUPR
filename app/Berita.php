<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "beritas";
    protected $fillable = ['id','judul','photo','date','kategori','deskripsi','status','slug','tag'];
    public $timestamps = false;
}
