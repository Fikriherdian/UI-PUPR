@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">ON GOING</a>
        </div>
    <div class="cont ">
    <table id="ongoing">
                <tr>
                    <th rowspan="2">PTN</th>
                    <th rowspan="2" class="jml">PROGRAM STUDI SUPER SPESIALIS</th>
                    <th colspan="2" >JUMLAH KS ON GOING</th>
                </tr>
                <tr>
                    <th>PUPR</th>
                    <th>BUMN</th>
                </tr>
                <tr>
                    <td class="odd">ITB</td>
                    <td>Rekayasa dan Pengendalian Morfologi Sungai</td>
                    <td>34</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td class="even">ITS</td>
                    <td>Rekayasa Pengelolaan dan Pengendalian Kehilangan Air Minum</td>
                    <td>7</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="2" class="odd">UNDIP</td>
                    <td>Operasi dan Instrumentasi Hidro-meteorologi Bendungan</td>
                    <td>8</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Retrofitting dan Instrumentasi Keamanan Bendungan</td>
                    <td>15</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td rowspan="3" class="even">UGM</td>
                    <td>Teknik Mitigasi Bencana Alam Likuifaksi</td>
                    <td>6</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Teknik Pengelolaan dan Mitigasi Bencana Rawa</td>
                    <td>12</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Rekayasa Eksplorasi dan Eksploitasi Air Tanah Dalam</td>
                    <td>13</td>
                    <td>2</td>
                </tr>
            </table>
            <!-- <li type="square" style="margin-left:20%;" ><span>Download File <a href="/file/LAKIP 2020 OK.pdf" class="pengbut">Unduh</a></span></li>';     -->
    </div>
</div>
@endsection