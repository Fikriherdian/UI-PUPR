@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">STRUKTUR ORGANISASI</a>
        </div>
    <div class="cont superspesialis">
        <div class="container-fluid table">
            <table id="superspesialis">
                <tr>
                    <th>PTN</th>
                    <th>PROGRAM STUDI SUPER SPESIALIS</th>
                </tr>
                <tr>
                    <td class="even">ITB</td>
                    <td>Rekayasa dan Pengendalian Morfologi Sungai</td>
                </tr>
                <tr>
                    <td rowspan="2" class="odd">UNDIP</td>
                    <td>Operasi dan Instrumentasi Hidro-meteorologi Bendungan</td>
                </tr>
                <tr>
                    <td>Retrofitting dan Instrumentasi Keamanan Bendungan</td>
                </tr>
                <tr>
                    <td class="even">ITS</td>
                    <td>Rekayasa Pengelolaan dan Pengendalian Kehilangan Air Minum</td>
                </tr>
                <tr>
                    <td rowspan="3" class="odd">UGM</td>
                    <td>Teknik Mitigasi Bencana Alam Likuifaksi</td>
                </tr>
                <tr>
                    <td>Teknik Pengelolaan dan Mitigasi Bencana Rawa</td>
                </tr>
                <tr>
                    <td>Rekayasa Eksplorasi dan Eksploitasi Air Tanah Dalam</td>
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