<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::paginate('10');
        return view ('backend.kategori.kategori')->with('kategori',$kategori);
    }
    public function tambah(){
        return view('backend.kategori.addkategori');
    }
    public function store(Request $request){
        $data = $request->all();
        $status=Kategori::create($data);
        if($status){
            request()->session()->flash('success','Kategori successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created kategori');
        }
        return redirect()->route('kategori');
    }
    public function edit($id){
        $kategori=Kategori::findOrFail($id);
        return view('backend.kategori.editkategori')->with('kategori',$kategori);
    }
    public function update(Request $request,$id){
        $kategori = Kategori::findOrFail($id);
        $data = $request->all();
        $status=$kategori->fill($data)->save();
        if($status){
            request()->session()->flash('success','Kategori successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated kategori');
        }
        return redirect()->route('kategori');
    }
    public function destroy($id){
        $kat=Kategori::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Kategori successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting kategori ');
        }
        return back();
    }
}
