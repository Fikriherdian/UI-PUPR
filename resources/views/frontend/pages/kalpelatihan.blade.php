@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">KALENDER PELATIHAN</a>
        </div>
    <div class="cont ">
        <table id="kalpel">
            <tr >
                <td >Pelatihan Bidang SDA </td>
                <td >:</td>
                <td><a href="/file/PELATIHAN SDA 2021 (METODE PELATIHAN).xlxs" Download>Unduh</a></td>
            </tr>
            <tr >
                <td>Pelatihan Bidang Permukiman</td>
                <td>:</td>
                <td><a href="/file/PELATIHAN PERKIM 2021.xlxs" Download>Unduh</a></td>
            </tr>
        </table>    
            <!-- <li type="square" style="margin-left:20%;" ><span>Download File <a href="/file/LAKIP 2020 OK.pdf" class="pengbut">Unduh</a></span></li>';     -->
    </div>
</div>
@endsection