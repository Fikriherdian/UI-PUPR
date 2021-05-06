@extends('frontend.includes.master')

@section('main-content')
<div class="wadah">
    <div class="butart">
            <a href="#">KONTAK</a>
        </div>
    <div class="cont kontak">
        <div class="row">
            <div class="col-50">
                <h1>Send Message</h1>
                <label for="nama">Nama Lengkap</label>
                <div class="input">
                    <input type="text" name="nama" id="nama" autocomplete="off" class="inp">
                </div>
                <label for="email">Email</label>
                <div class="input">
                    <input type="email" name="email" id="email" autocomplete="off" class="inp">
                </div>
                <div class="text">
                        <label for="kata">Masukkan</label>
                        <textarea name="kata" id="kata"></textarea>  
                </div>
                <div class="button">
                    <input type="button" value="Submit" class="but">
                </div>
            </div>
            <div class="col-50">
                <div class="kont">
                    <p><span class="glyphicon glyphicon-earphone"></span> (022) 7206892</p>
                    <p><span class="glyphicon glyphicon-print"></span> (022) 63722273</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> pusat2_bpsdm@pu.go.id</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Jl. Abdul Hamid,Cicaheum, Bandung 40195</p>
                </div>
            </div>
        </div>
        <div class="lokasi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9262199549858!2d107.66072241537519!3d-6.899427469437733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e95d456bf3%3A0xe4f2f048601db82d!2sBPSDM%20Kementerian%20PUPR%20Bandung!5e0!3m2!1sen!2sid!4v1619069484763!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection