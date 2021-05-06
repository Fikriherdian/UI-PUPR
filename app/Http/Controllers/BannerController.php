<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class BannerController extends Controller
{
    public function index(){
        $banner = Banner::paginate('10');
        return view ('backend.banner.banner')->with('banner',$banner);
    }
    public function create(){
        return view('backend.banner.addbanner');
    }
    public function store(Request $request){
        $data = $request->all();
        $status=Banner::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created banner');
        }
        return redirect()->route('banner.index');
    }
    public function edit($id){
        $banner=Banner::findOrFail($id);
        return view('backend.banner.editbanner')->with('banner',$banner);
    }
    public function update(Request $request,$id){
        $banner = Banner::findOrFail($id);
        $data = $request->all();
        $status=$banner->fill($data)->save();
        if($status){
            request()->session()->flash('success','Banner successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated banner');
        }
        return redirect()->route('banner.index');
    }
    public function destroy($id){
        $kat=Banner::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting banner ');
        }
        return redirect()->route('banner.index');
    }
}
