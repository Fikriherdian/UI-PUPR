<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::paginate('10');
        return view('backend.pengumuman.pengumuman')->with('pengumuman',$pengumuman);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pengumuman.addpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data['tag']);
        $slug=Str::slug($request->judul);
        $count=Pengumuman::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/pengumuman/".$slug;
        $tags=$request->input('tag');
        if($tags){
            $data['tag']=implode(',',$tags);
        }
        else{
            $data['tag']='';
        }
        $status=Pengumuman::create($data);
        if($status){
            request()->session()->flash('success','Pengumuman successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created Pengumuman');
        }
        return redirect()->route('pengumuman.index');
        // dd($data['slug']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman=Pengumuman::findOrFail($id);
        return view('backend.pengumuman.editpengumuman')->with('pengumuman', $pengumuman);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengumuman=Pengumuman::findOrFail($id);
        $data = $request->all();
        $slug=Str::slug($request->judul);
        $count=Pengumuman::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']="/pengumuman/".$slug;
        $tags=$request->input('tag');
        if($tags){
            $data['tag']=implode(',',$tags);
        }
        else{
            $data['tag']='';
        }
        $status=$pengumuman->fill($data)->save();
        if($status){
            request()->session()->flash('success','Pengumuman successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated pengumuman');
        }
        return redirect()->route('pengumuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ber=Pengumuman::findOrFail($id);
       
        $status=$ber->delete();
        
        if($status){
            request()->session()->flash('success','Pengumuman successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting pengumuman ');
        }
        return redirect()->route('pengumuman.index');
    }
}
