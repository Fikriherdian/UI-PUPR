<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('admin');
        }else{
            return view('auth.login');
        } 
    }
    public function forget(){
        return view('auth.forgot');
    }
    public function register(){
        return view('auth.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|confirmed',
            'role' => 'string'
        ]);
        // $file = $request->file('photo');
        $data=$request->all();
        // dd($data['role']);
        $check= User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'role'=>$data['role'],
            'password'=>Hash::make($data['password']),
            ]);
        
        if($check){
            Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('admin');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            // dd($data);
            Session::put('user',$data['email']);
            // request()->session()->flash('success','Successfully login');
            return redirect()->route('admin');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
