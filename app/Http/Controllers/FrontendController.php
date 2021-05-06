<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aplikasi;
use App\Banner;
use App\Berita;
use App\Kategori;
use App\Page;

class FrontendController extends Controller
{
    public function index(){
        $apps = Aplikasi::get();
        $banner = Banner::where('kategori','pengumuman')->get();
        $mahasiswa = Banner::where('kategori','mahasiswa')->get();
        $artikel = Berita::where('kategori',1)->limit(8)->get();
        // dd($artikel);
        return view('frontend.home')
            ->with('apps',$apps)
            ->with('banner',$banner)
            ->with('mahasiswa',$mahasiswa)
            ->with('artikel',$artikel);
    }
    public function coba($page){
        $pages = Page::where('slug',$page)->get();
        // dd($pages);
        return view('frontend.coba')->with('pages',$pages);
    }
}
