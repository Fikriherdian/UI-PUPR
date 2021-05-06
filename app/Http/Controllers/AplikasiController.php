<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikasi;

class AplikasiController extends Controller
{
    public function index(){
        $aplikasi = Aplikasi::paginate('10');
        return view ('backend.aplikasi.aplikasi')->with('aplikasi',$aplikasi);
    }
    public function create(){
        return view('backend.aplikasi.addaplikasi');
    }
    public function store(Request $request){
        $data = $request->all();
        $status= Aplikasi::create($data);
        if($status){
            request()->session()->flash('success','Aplikasi successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created aplikasi');
        }
        return redirect()->route('aplikasi.index');
    }
    public function edit($id){
        $aplikasi= Aplikasi::findOrFail($id);
        return view('backend.aplikasi.editaplikasi')->with('aplikasi',$aplikasi);
    }
    public function update(Request $request,$id){
        $aplikasi = Aplikasi::findOrFail($id);
        $data = $request->all();
        $status=$aplikasi->fill($data)->save();
        if($status){
            request()->session()->flash('success','Aplikasi successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated aplikasi');
        }
        return redirect()->route('aplikasi.index');
    }
    public function destroy($id){
        $kat= Aplikasi::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Aplikasi successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting aplikasi ');
        }
        return redirect()->route('aplikasi.index');
    }
}
