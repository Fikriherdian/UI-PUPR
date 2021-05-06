<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){
        $page = Page::paginate('10');
        return view ('backend.page.page')->with('page',$page);
    }
    public function tambah(){
        $page = Page::get();
        // dd($page);
        return view('backend.page.addpage')->with('page',$page);
    }
    public function store(Request $request){
        $data = $request->all();
        $st=new Page;
        $slug=Str::slug($request->nama);
        $old = Page::get();
        $count=Page::where('slug',$slug)->count();
        $data['priv'] = Auth::user()->id;
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        if($data['link'] == ''){
            $data['slug']=$slug;
            $data['link']="/page/".$slug;
        }       
        
        foreach($old as $p){
            if($data['parents'] == $p->parent){
                if($data['urutan'] == $p->urutan){
                    $chance = Page::findOrFail($p->id);
                    $data['belakang'] = $p->id;
                    $chance->urutan = $id;   
                    $chance->save();                 
                }
                else{
                    $data['belakang'] = '0';
                }
            }
        }
        $status=$st->fill($data)->save();
        if($status){
            request()->session()->flash('success','Page successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created page');
        }
        return redirect()->route('page');
    }
    public function edit($id){
        $page=Page::findOrFail($id);
        $parents = Page::get();
        $urutan = Page::get();
        return view('backend.page.editpage')
            ->with('page',$page)
            ->with('parents',$parents)
            ->with('urutan',$urutan);
    }
    public function update(Request $request,$id){
        $page = Page::findOrFail($id);
        $old = Page::get();
        $data = $request->all();
        $slug=Str::slug($request->nama);
        $count=Page::where('slug',$slug)->count();
        $data['priv'] = Auth::user()->id;
        // dd($data['priv']);
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        if($data['link'] == ''){
            $data['slug']=$slug;
            $data['link']="/page/".$slug;
        }
        foreach($old as $p){
            if($data['parents'] == $p->parent){
                if($data['urutan'] == $p->urutan){
                    $chance = Page::findOrFail($p->id);
                    $data['belakang'] = $p->id;
                    $chance->urutan = $id;   
                    $chance->save();                 
                }
                else{
                    $data['belakang'] = '0';
                }
            }
        }
        $status=$page->fill($data)->save();
        if($status){
            request()->session()->flash('success','Page successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated page');
        }
        return redirect()->route('page');
    }
    public function destroy($id){
        $kat=Page::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','page successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting page ');
        }
        return back();
    }
    public function daftar(){
        return view('backend.page.daftarpage');
    }
}
