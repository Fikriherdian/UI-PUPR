<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = "settings";
    protected $fillable = ['id','institusi','depan','belakang','icon','logonavbar','logo','telepon','fax','alamat','email','maps','copyright'];
    public $timestamps = false;
}

