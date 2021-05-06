@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">LAPORAN KINERJA</a>
        </div>
    <div class="cont ">
        <table id="lakip">
            <tr background-color="#ccc">
                <td width="30px">Judul</td>
                <td >:</td>
                <td>LAPORAN KINERJA TA.2020 PUSAT PENGEMBANGAN KOMPETENSI SUMBER DAYA AIR DAN PERMUKIMAN</td>
            </tr>
            <tr >
                <td width="30px">Tanggal</td>
                <td width="5px">:</td>
                <td>2020</td>
            </tr>
            <tr background-color="#ccc">
                <td width="30px">Download File </td>
                <td >:</td>
                <td><a href="/file/LAKIP 2020 OK.pdf" Download>Unduh</a></td>
            </tr>
            <tr></tr>
        </table>    
            <!-- <li type="square" style="margin-left:20%;" ><span>Download File <a href="/file/LAKIP 2020 OK.pdf" class="pengbut">Unduh</a></span></li>';     -->
    </div>
</div>
@endsection