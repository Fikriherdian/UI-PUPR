@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">STRUKTUR ORGANISASI</a>
        </div>
    <div class="cont superspesialis">
        <div class="container-fluid table">
            <table>
                <tr>
                    <th>PTN</th>
                    <th>PROGRAM STUDI SUPER SPESIALIS</th>
                </tr>
                <tr>
                    <td>ITB</td>
                    <td>Rekayasa dan Pengendalian Morfologi Sungai</td>
                </tr>
                <tr>
                    <td rowspan="2">UNDIP</td>
                    <td>Operasi dan Instrumentasi Hidro-meteorologi Bendungan</td>
                </tr>
                <tr>
                    <td>Retrofitting dan Instrumentasi Keamanan Bendungan</td>
                </tr>
            </table>
        </div>
        <div class="gambar">
            <img src="/images/persyaratan.png" alt="" width="100%">
            <img src="/images/mekanisme.png" alt="" width="100%">
        </div>
    </div>
</div>
@endsection