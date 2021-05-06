<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::paginate('10');
        return view ('backend.galeri.galeri')->with('galeri',$galeri);
    }
    public function create(){
        return view('backend.galeri.addgaleri');
    }
    public function store(Request $request){
        $data = $request->all();
        $status=Galeri::create($data);
        if($status){
            request()->session()->flash('success','Galeri successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created galeri');
        }
        return redirect()->route('galeri.index');
    }
    public function edit($id){
        $galeri=Galeri::findOrFail($id);
        return view('backend.galeri.editgaleri')->with('galeri',$galeri);
    }
    public function update(Request $request,$id){
        $galeri = Galeri::findOrFail($id);
        $data = $request->all();
        $status=$galeri->fill($data)->save();
        if($status){
            request()->session()->flash('success','Galeri successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated galeri');
        }
        return redirect()->route('galeri.index');
    }
    public function destroy($id){
        $kat=Galeri::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Galeri successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting galeri ');
        }
        return redirect()->route('galeri.index');
    }
}
