<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sosmed;

class SosmedController extends Controller
{
    public function index(){
        $sosmed = Sosmed::paginate('10');
        return view ('backend.sosmed.sosmed')->with('sosmed',$sosmed);
    }
    public function create(){
        return view('backend.sosmed.addsosmed');
    }
    public function store(Request $request){
        $data = $request->all();
        $status=Sosmed::create($data);
        if($status){
            request()->session()->flash('Success','sosmed successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created sosmed');
        }
        return redirect()->route('sosmed.index');
    }
    public function edit($id){
        $sosmed=Sosmed::findOrFail($id);
        return view('backend.sosmed.editsosmed')->with('sosmed',$sosmed);
    }
    public function update(Request $request,$id){
        $sosmed = Sosmed::findOrFail($id);
        $data = $request->all();
        $status=$sosmed->fill($data)->save();
        if($status){
            request()->session()->flash('success','Sosmed successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated sosmed');
        }
        return redirect()->route('sosmed.index');
    }
    public function destroy($id){
        $kat=Sosmed::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Sosmed successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting sosmed ');
        }
        return redirect()->route('sosmed.index');
    }
}
