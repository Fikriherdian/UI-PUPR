<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::paginate('10');
        return view ('backend.tag.tag')->with('tag',$tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tag.addtag');
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
        $status= Tag::create($data);
        if($status){
            request()->session()->flash('success','Tag successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created tag');
        }
        return redirect()->route('tag.index');
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
        $tag= Tag::findOrFail($id);
        return view('backend.tag.edittag')->with('tag',$tag);
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
        $tag = Tag::findOrFail($id);
        $data = $request->all();
        $status=$tag->fill($data)->save();
        if($status){
            request()->session()->flash('success','Tag successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated tag');
        }
        return redirect()->route('tag.indexs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat= Tag::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Tag successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting tag ');
        }
        return back();
    }
}
