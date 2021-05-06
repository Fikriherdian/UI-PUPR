<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate('10');
        return view ('backend.user.user')->with('user',$user);
    }
}
