@extends('frontend.includes.master')

@section('main-content')
      <!-- CAROUSEL START -->
      <div style="z-index:-5;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                <div class="item active">
                    <img src="images/carousel/photo6316850909421873924.jpg" alt="Los Angeles" style="width:100%;">
                    <!-- <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>LA is always so much fun!</p>
                    </div> -->
                </div>

                <div class="item">
                    <img src="images/carousel/photo6316850909421873924.jpg" alt="Chicago" style="width:100%;">
                    <!-- <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                    </div> -->
                </div>
                
                <div class="item">
                    <img src="images/carousel/photo6316850909421873924.jpg" alt="New York" style="width:100%;">
                    <!-- <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                    </div> -->
                </div>
            
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      <!-- CAROUSEL END -->
    
    <!-- PIMPINAN START-->
      <div class="container-fluid">
        <div class="row pimpinan">
          <div class="col-25">
            <img src="images/C6PTsLfVMAMPMpG.png" alt="" class="foto">
          </div>     
          <div class="col-40">
            <div class="petik">
              <div class="arrow-down"></div>
              <h1>" If you have knowledge let others ligth their candles at it. "</h1>
              <p>- Ir. H. Ruhban Ruzziyatno</p>
            </div>
          </div>
          <div class="col-35 agenda">
            <h1>Agenda Pimpinan</h1>
            <p><a href="#">FINALISASI KURIKULUM MODUL PEMBIAYAAN... </a>
              <p class="tanggal">3 Maret</p>
            </p>
            <p><a href="#">FINALISASI KURIKULUM MODUL PEMBIAYAAN... </a>
              <p class="tanggal">3 Maret</p>
            </p>
            <p><a href="#">FINALISASI KURIKULUM MODUL PEMBIAYAAN... </a>
              <p class="tanggal">3 Maret</p>
            </p>
            <p><a href="#">FINALISASI KURIKULUM MODUL PEMBIAYAAN... </a>
              <p class="tanggal">3 Maret</p>
            </p>
          </div>
        </div>
      </div>
    <!-- PIMPINAN END  -->
    <div class="break"></div>
    <!-------------------------------
    ---------BERITA START-----------
    -------------------------------->
    <div class="container-fluid">
      <div class="row ini-berita">
        <div class="org"> </div>
        <div class="blu"> </div>
        <p>BERITA TERBARU</p>
      </div>
      <div class="row ber">
        <div class="col-6">
          <div class="w3container">
            <img src="images/berita/Rectangle_127.png" alt="Notebook" style="width:100%;">
            <div class="content">
              <p>Category 10 Maret 2021</p>
              <a href="#"> Pelatihan Pendampingan Penyusunan Feasibility Study</a>
            </div>
            <div class="garis"></div>
          </div>  
        </div>
        <div class=" col-6">
          <div class="kanan">
            <img src="images/berita/Rectangle_130.png" alt="Notebook" style="width:100%; max-height:400px">
            <div class="content">
              <p>Category 24 Maret 2021</p>
              <a href="#">Penandatanganan kontrak kerjasama pendidikan program magister super spesialis</a>
            </div>
            <div class="garis"></div>
          </div>
          <div class="row" style="margin-top:20px">
            <div class="col-6" >
              <div class="bawah">
                <img src="images/berita/Rectangle_128.png" alt="Notebook" style="width:100%; max-height:330px">
                <div class="content">
                  <p>Category 12 Maret 2021</p>
                  <a href="#">Penutupan pelatihan penataan bangunan dan</a>
                </div>
                <div class="garis"></div>
              </div>
            </div>
            <div class="col-6" >
              <div class="bawah">
                <img src="images/berita/Rectangle_129.png" alt="Notebook" style="width:100%; max-height:330px">
                <div class="content">
                  <p>Category 3 Maret 2021</p>
                  <a href="#">Pelatihan perencanaan penataan bangunan</a>
                </div>
                <div class="garis"></div>
              </div>
            </div>
          </div>
        </div>            
      </div>
    </div>
    <!-------------------------------
    ---------BERITA END--------------
    -------------------------------->
    <div class="break"></div>
    <!-------------------------------
    ---------ARTIKEL START-----------
    -------------------------------->
    <div class="container-fluid">
      <div class="row ini-berita">
        <div class="org"> </div>
        <div class="blu"> </div>
        <p>ARTIKEL</p>
      </div>
      <div class=" row artikel1" >
        <div id="artikel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#artikel" data-slide-to="0" class="active"></li>
            <li data-target="#artikel" data-slide-to="1"></li>
            <li data-target="#artikel" data-slide-to="2"></li>
            <li data-target="#artikel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

            <div class="item active">
              <div class="row">
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_148.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>LSP BPSDM</h1>
                  <a href="#">Telah terbit Surat Keputusan Kepala BSPDM Kementerian PUPR terkait perubahan....</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_149.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Milenial dan Problem...</h1>
                  <a href="#">Dalam teori Kebutuhan Dasar, seorang teroritikus dan sekaligus psikolog, Abraham Maslow...</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_150.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Big D3, Digitalisasi...</h1>
                  <a href="#">Zaman ini digitalisasi adalah kunci. Digitalisasi adalah inti. Bahkan dalam....</a>
                </div>  
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_151.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Teknologi VR dalam....</h1>
                  <a href="#">Diawal tahun 2020, Pusdiklat Jalan, Perumahan, Permukiman, dan Pengembangan....</a>
                </div>
              </div>             
            </div>

            <div class="item">
              <div class="row">
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_148.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>LSP BPSDM</h1>
                  <a href="#">Telah terbit Surat Keputusan Kepala BSPDM Kementerian PUPR terkait perubahan....</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_149.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Milenial dan Problem...</h1>
                  <a href="#">Dalam teori Kebutuhan Dasar, seorang teroritikus dan sekaligus psikolog, Abraham Maslow...</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_150.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Big D3, Digitalisasi...</h1>
                  <a href="#">Zaman ini digitalisasi adalah kunci. Digitalisasi adalah inti. Bahkan dalam....</a>
                </div>  
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_151.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Teknologi VR dalam....</h1>
                  <a href="#">Diawal tahun 2020, Pusdiklat Jalan, Perumahan, Permukiman, dan Pengembangan....</a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="row">
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_148.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>LSP BPSDM</h1>
                  <a href="#">Telah terbit Surat Keputusan Kepala BSPDM Kementerian PUPR terkait perubahan....</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_149.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Milenial dan Problem...</h1>
                  <a href="#">Dalam teori Kebutuhan Dasar, seorang teroritikus dan sekaligus psikolog, Abraham Maslow...</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_150.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Big D3, Digitalisasi...</h1>
                  <a href="#">Zaman ini digitalisasi adalah kunci. Digitalisasi adalah inti. Bahkan dalam....</a>
                </div>  
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_151.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Teknologi VR dalam....</h1>
                  <a href="#">Diawal tahun 2020, Pusdiklat Jalan, Perumahan, Permukiman, dan Pengembangan....</a>
                </div>
              </div> 
            </div>
            
            <div class="item">
              <div class="row">
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_148.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>LSP BPSDM</h1>
                  <a href="#">Telah terbit Surat Keputusan Kepala BSPDM Kementerian PUPR terkait perubahan....</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_149.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Milenial dan Problem...</h1>
                  <a href="#">Dalam teori Kebutuhan Dasar, seorang teroritikus dan sekaligus psikolog, Abraham Maslow...</a>
                </div>
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_150.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Big D3, Digitalisasi...</h1>
                  <a href="#">Zaman ini digitalisasi adalah kunci. Digitalisasi adalah inti. Bahkan dalam....</a>
                </div>  
                <div class="col-25 arti">
                  <img src="images/artikel/Rectangle_151.png" alt="">
                  <a class="date">Category 24 Maret 2021</a>
                  <br></br>
                  <h1>Teknologi VR dalam....</h1>
                  <a href="#">Diawal tahun 2020, Pusdiklat Jalan, Perumahan, Permukiman, dan Pengembangan....</a>
                </div>
              </div>
            </div>
        
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#artikel" data-slide="prev" >
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#artikel" data-slide="next" >
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
      </div>
    </div>
    <!-------------------------------
    ---------ARTIKEL END-------------
    -------------------------------->
    <div class="break"></div>
    <!-------------------------------
    ---------VIDEO START-----------
    -------------------------------->
    <div class="container-fluid">
      <div class="row ini-berita">
        <div class="org"> </div>
        <div class="blu"> </div>
        <p>VIDEO</p>
      </div>
      <div class="row ini-berita">
        <div class="col-6">
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/Boq27H_JQi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-6 famk">
          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/Boq27H_JQi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <!-------------------------------
    ---------VIDEO END---------------
    -------------------------------->
    <div style="background-image: url('images/batikpuscreen4.jpg'); background-size: 100% auto; ">
      <div class="opa">
        <div class="break"></div>
    <!-------------------------------
    ---------BIDANG  START-----------
    -------------------------------->
        <div class="container-fluid" >
          <div class="row ini-berita">
            <div class="org"></div>
            <div class="blu"></div>
            <p>BIDANG ORGANISASI</p>
          </div>
          <div class="row ini-berita">
            <div class="col-6 bidang" >
              <h1>BIDANG SUMBER DAYA AIR</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum</p>
              <a href="#">Read More <i class="fa fa-long-arrow-right" style="font-size:24px"></i></a>
            </div>
            <div class="col-6">
              <img src="/images/bidang/Rectangle_155.png" alt="" style="width:80%; float:right; margin-top:50px">
            </div>
          </div>
          <div class="row ini-berita">
            <div class="col-6">
              <img src="/images/bidang/Rectangle_154.png" alt="" style="width:80%; margin-top:50px">
            </div>
            
            <div class="col-6 bidang" >
              <h1>BIDANG PERMUKIMAN</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum</p>
              <a href="#">Read More <i class="fa fa-long-arrow-right" style="font-size:24px"></i></a>
            </div>
          </div>
        </div>
    <!-------------------------------
    ---------BIDANG    END-----------
    -------------------------------->
        <div class="break"></div>
      </div>
    </div>
    <!-------------------------------
    -----BERITA BIDANG  START--------
    -------------------------------->
    <div class="container-fluid">
      <div class="row ini-berita">
        <div class=" row berbidang">
            <div class="col-6">
              <h1>BERITA BIDANG PERMUKIMAN</h1>
              <ul>
                <li style="list-style-type: disc;">
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>  
                <div style="text-align:center; margin:50px">
                  <a href="#" class="but">ARSIP BIDANG PERMUKIMAN</a>
                </div>              
              </ul>              
            </div>
            <div class="col-6">
              <h1>BERITA BIDANG SUMBER DAYA AIR </h1>
              <ul>
                <li>
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . . </a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                  <p>19 Mar 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                  <p>2 Apr 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <li>
                  <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                  <p>12 Mei 2021</p>
                </li>
                <div style="text-align:center; margin:50px">
                  <a href="#" class="but">ARSIP BIDANG SUMBER DAYA AIR</a>
                </div> 
              </ul>
            </div>
        </div>
      </div>
    </div>
    <!-------------------------------
    -------BERITA BIDANG END---------
    -------------------------------->

    <!-------------------------------
    --------APLIKASI START-----------
    -------------------------------->
    <div class="container-fluid app">
      <div class="row ini-berita">
        <div class="col-6 ">
          <h1><i class="fa fa-paperclip" aria-hidden="true"></i> LINK APLIKASI</h1>
          <div class="row" >
            <div class="col-3">
            <img src="images/aplikasi/20201015035355icons-elhkpn.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015035451icons-e-announ.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015040445icons-saran.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015040528icons-eppid.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
          </div>
          <div class="row" style="margin-top:50px;">
            <div class="col-3">
            <img src="images/aplikasi/20201015040600icons-gpr.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015040623icons-layanan.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015040657icons-wbs.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
            <div class="col-3">
            <img src="images/aplikasi/20201015042055icons-pungli.svg" alt="" style="border-radius:50%; width:80%; background-color:white;">
            </div>
          </div>
        </div>
        <div class="col-6 kanan">
          <h1><i class="fa fa-bell-o" aria-hidden="true"></i> PENGUMUMAN </h1>
            <ul style="margin-top:20px;">
              <li>
                <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                <p>19 Mar 2021</p>
              </li>
              <li>
                <a href="#">Peningkatan PPID sebagai Stimuli Masyarakat . . .</a>
                <p>2 Apr 2021</p>
              </li>
              <li>
                <a href="#">Peningkatan Instrumen Evaluasi dalam . . .</a>
                <p>12 Mei 2021</p>
              </li>
              <li>
                <a href="#">KSF Sosialisasi Peraturan Undang-undang . . .</a>
                <p>19 Mar 2021</p>
              </li>
            </ul>
        </div>
      </div>
    </div>
    <!-------------------------------
    ------------APLIKASI END---------
    -------------------------------->

    
    <!-------------------------------
    ----------MAHASISWA START--------
    -------------------------------->
    <div id="mahasiswa" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#mahasiswa" data-slide-to="0" class="active"></li>
        <li data-target="#mahasiswa" data-slide-to="1"></li>
        <li data-target="#mahasiswa" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

        <div class="item active">
            <img src="images/carousel/Artboard – 1.png" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
            </div>
        </div>

        <div class="item">
            <img src="images/carousel/Artboard – 2.png" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="images/carousel/mahasiswa.png" alt="New York" style="width:100%;">
            <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
            </div>
        </div>
    
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#mahasiswa" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mahasiswa" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
        <div class="subs">
            <h1>Dapatkan info terbaru mengenai Kementerian PUPR BPSDM</h1>
            <div class="inp">
              <input type="text" class="tex" placeholder="Masukkan Email...">
              <input type="button" class="butt" value="Subscribe">
            </div>
        </div>
    </div>
    <!-------------------------------
    ------------MAHASISWA END---------
    -------------------------------->

@endsection
@push('styles')
@endpush
@push('scripts')
@endpush