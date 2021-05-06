@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">STRUKTUR ORGANISASI</a>
        </div>
    <div class="cont">
        <?php 
            foreach($pages as $p){
                echo $p->deskripsi;
            } 
        ?>
    </div>
</div>
@endsection