<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribe = Subscribe::paginate('10');
        return view('backend.subscribe.subscribe')->with('subscribe',$subscribe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $status= Subscribe::create($data);
        if($status){
            request()->session()->flash('success','Subscribe successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created subscribe');
        }
        return back();
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
        $subscribe=Subscribe::findOrFail($id);
        return view('backend.subscribe.editsubscribe')->with('subscribe',$subscribe);
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
        $subscribe = Subscribe::findOrFail($id);
        $data = $request->all();
        $status=$subscribe->fill($data)->save();
        if($status){
            request()->session()->flash('success','subscribe successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated subscribe');
        }
        return redirect()->route('subscribe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat=Subscribe::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','subscribe successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting subscribe ');
        }
        return redirect()->route('subscribe.index');
    }
}
