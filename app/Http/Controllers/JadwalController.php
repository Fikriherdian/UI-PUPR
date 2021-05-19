<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;
use App\Quote;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::paginate('10');
        return view ('backend.pimpinan.jadwal')->with('jadwal',$jadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pimpinan.addjadwal');
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
        $status=Jadwal::create($data);
        if($status){
            request()->session()->flash('success','Jadwal successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created jadwal');
        }
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quote= Quote::findOrFail($id);
        return view('backend.pimpinan.editpimpinan')->with('quote',$quote);
    }
    public function ubah(Request $request, $id){
        $quote = Quote::findOrFail($id);
        $data = $request->all();
        $status=$quote->fill($data)->save();
        if($status){
            request()->session()->flash('success','Pimpinan successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated pimpinan');
        }
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal=Jadwal::findOrFail($id);
        return view('backend.pimpinan.editjadwal')->with('jadwal',$jadwal);
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
        $jadwal = Jadwal::findOrFail($id);
        $data = $request->all();
        $status=$jadwal->fill($data)->save();
        if($status){
            request()->session()->flash('success','Jadwal successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated jadwal');
        }
        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat=Jadwal::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Jadwal successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting jadwal ');
        }
        return redirect()->route('jadwal.index');
    }

}
