<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::paginate('10');
        return view('backend.pesan.pesan')->with('pesan',$pesan);
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
        //
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
        $pesan= Pesan::findOrFail($id);
        return view('backend.pesan.editpesan')->with('pesan',$pesan);
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
        $pesan = Pesan::findOrFail($id);
        $data = $request->all();
        $status=$pesan->fill($data)->save();
        if($status){
            request()->session()->flash('success','pesan successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated pesan');
        }
        return redirect()->route('pesan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat= Pesan::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','pesan successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting pesan ');
        }
        return redirect()->route('pesan.index');
    }
}
