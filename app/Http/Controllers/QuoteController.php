<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function index(){
        $quote = Quote::paginate('10');
        return view ('backend.quote.quote')->with('quote',$quote);
    }
    public function create(){
        return view('backend.quote.addquote');
    }
    public function store(Request $request){
        $data = $request->all();
        $status= Quote::create($data);
        if($status){
            request()->session()->flash('success','Quote successfully created');
        }
        else{
            request()->session()->flash('error','Eror while created quote');
        }
        return redirect()->route('quote.index');
    }
    public function edit($id){
        $quote= Quote::findOrFail($id);
        return view('backend.quote.editquote')->with('quote',$quote);
    }
    public function update(Request $request,$id){
        $quote = Quote::findOrFail($id);
        $data = $request->all();
        $status=$quote->fill($data)->save();
        if($status){
            request()->session()->flash('success','Quote successfully updated');
        }
        else{
            request()->session()->flash('error','Eror while updated quote');
        }
        return redirect()->route('quote.index');
    }
    public function destroy($id){
        $kat= Quote::findOrFail($id);
       
        $status=$kat->delete();
        
        if($status){
            request()->session()->flash('success','Quote successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting quote ');
        }
        return redirect()->route('quote.index');
    }
}
