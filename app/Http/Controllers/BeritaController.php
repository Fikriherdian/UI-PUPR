<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::paginate('10');
        return view('backend.berita.berita')->with('berita',$berita);
    }
    public function tambah(){
        $kategori = Kategori::where('status','aktif')->get();
        return view('backend.berita.addberita')->with('kategori',$kategori);
    }
    public function store(Request $request){
        $data = $request->all();
        // dd($data['tag']);
        $slug=Str::slug($request->judul);
        $count=Berita::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/berita/".$slug;
        $tags=$request->input('tag');
        if($tags){
            $data['tag']=implode(',',$tags);
        }
        else{
            $data['tag']='';
        }
        $status=Berita::create($data);
        if($status){
            request()->session()->flash('success','Berita successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created berita');
        }
        return redirect()->route('berita');
        // dd($data['slug']);
    }
    public function edit($id){
        $berita=Berita::findOrFail($id);
        $kategori = Kategori::where('status','aktif')->get();
        return view('backend.berita.editberita')
            ->with('berita',$berita)
            ->with('kategori',$kategori);
    }
    public function update(Request $request,$id){
        $berita=Berita::findOrFail($id);
        $data = $request->all();
        $slug=Str::slug($request->judul);
        $count=Berita::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/berita/".$slug;
        $tags=$request->input('tag');
        if($tags){
            $data['tag']=implode(',',$tags);
        }
        else{
            $data['tag']='';
        }
        $status=$berita->fill($data)->save();
        if($status){
            request()->session()->flash('success','Berita successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated berita');
        }
        return redirect()->route('berita');
    }
    public function destroy($id){
        $ber=Berita::findOrFail($id);
       
        $status=$ber->delete();
        
        if($status){
            request()->session()->flash('success','Berita successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting berita ');
        }
        return redirect()->route('berita');
    }
}
