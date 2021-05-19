<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Video;

class SettingController extends Controller
{
    public function edit(Request $request,$id){
        $setting = Setting::findOrFail($id);
        return view('backend.setting')->with('setting',$setting);
    }
    public function update(Request $request,$id){
        $setting = Setting::findOrFail($id);
        $data = $request->all();
        $status=$setting->fill($data)->save();
        if($status){
            request()->session()->flash('success','Setting successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated setting');
        }
        return back();
    }
    public function change($id){
        $video = Video::findOrFail($id);
        return view('backend.video')->with('video',$video);
    }
    public function store(Request $request,$id){
        $video = Video::findOrFail($id);
        $data = $request->all();
        $status=$video->fill($data)->save();
        if($status){
            request()->session()->flash('success','Video successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated video');
        }
        return back();
    }
}
