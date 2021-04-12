@extends('frontend.includes.master')

@section('main-content')
    <div class="wadah">
        <div class="ppid">
            <div class="row">
                <div class="col-6">
                    <label for="nama">Nama Lengkap</label>
                    <div class="input">
                        <input type="text" name="nama" id="nama" autocomplete="off" class="inp">
                    </div>
                </div> 
                <div class="col-6">
                    <label for="email">Email</label>
                    <div class="input">
                        <input type="email" name="email" id="email" autocomplete="off" class="inp">
                    </div>
                </div> 
            </div> 
            <br> 
            <div class="text">      
                <label for="kata">Masukkan</label>
                <textarea name="kata" id="kata"></textarea>  
            </div>
            <div class="button">
                <input type="button" value="Submit" class="but">
            </div>
        </div>        
    </div>
@endsection