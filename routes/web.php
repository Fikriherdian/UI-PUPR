<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@index')->name('index');
Route::view('/xd','frontend.cd');
Route::view('/berita/artikel','frontend.pages.berita_detail');
Route::view('/artikel','frontend.pages.artikel');
Route::view('/ppid','frontend.pages.ppid');
Route::view('/tupoksi','frontend.pages.tupoksi');
Route::view('/struktur','frontend.pages.struktur');
Route::view('/galeri','frontend.pages.galeri');
Route::view('/superpesialis','frontend.pages.superpesialis');
Route::view('/lokasi','frontend.pages.lokasi');
Route::view('/laporan-kinerja','frontend.pages.lakip');
Route::view('/rencana-strategis','frontend.pages.renstra');
Route::view('/Kurikulum-modul','frontend.pages.kurmod');
Route::view('/on-going','frontend.pages.ongoing');
Route::view('/kalender-pelatihan','frontend.pages.kalpelatihan');
Route::view('/kontak','frontend.pages.kontak');
Route::view('/pelatihan-sda','frontend.pages.pelsda');

Route::get('/login','AuthController@login')->name('login');
Route::get('/forget-password','AuthController@forget')->name('forget');
Route::get('/register','AuthController@register')->name('register');
Route::post('/regstore','AuthController@registerSubmit')->name('regis.store');
Route::post('/logstore','AuthController@loginSubmit')->name('login.store');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/page/{pages}','FrontendController@coba')->name('pages');
Route::resource('pesan','PesanController');
Route::resource('subscribe','SubscribeController');

Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){
    Route::get('/file-manager',function(){
        return view('backend.include.file-manager');
    })->name('file-manager');
    Route::view('/','backend.admin')->name('admin');
    /* ----------------------------       BERITA       ---------------------------- */
    Route::resource('berita','BeritaController');
    /* ----------------------------       KATEGORI       ---------------------------- */    
    Route::resource('kategori','KategoriController');
    /* ----------------------------       SETTINGS       ---------------------------- */
    Route::get('/setting/edit/{id}','SettingController@edit')->name('editsetting');
    Route::post('/setting/update/{id}','SettingController@update')->name('updatesetting');
    /* ------------------------------       VIDEO       ------------------------------ */
    Route::get('/video/edit/{id}','SettingController@change')->name('editvideo');
    Route::post('/video/update/{id}','SettingController@store')->name('updatevideo');
    /* ----------------------------       GALERI       ---------------------------- */
    Route::resource('galeri','GaleriController');
    /* ----------------------------       BANNER       ---------------------------- */
    Route::resource('banner','BannerController');
    /* ----------------------------       APLIKASI       ---------------------------- */
    Route::resource('aplikasi','AplikasiController');
    /* ----------------------------       PAGE       ---------------------------- */
    Route::resource('page','PageController');
    /* ----------------------------       SOSMED       ---------------------------- */
    Route::resource('sosmed','SosmedController');
    /* ----------------------------       QUOTE       ---------------------------- */
    Route::resource('quote','QuoteController');
    /* ----------------------------       TAG       ---------------------------- */
    Route::resource('tag','TagController');
    /* ----------------------------       USER       ---------------------------- */
    Route::resource('user','UserController');
    /* ----------------------------       ROLE       ---------------------------- */
    Route::resource('role','RoleController');
    /* ----------------------------       JADWAL       ---------------------------- */
    Route::resource('jadwal','JadwalController');
    /* ----------------------------       PENGUMUMAN       ---------------------------- */
    Route::resource('pengumuman','PengumumanController');
    Route::post('/pimpinan/ubah/{id}','JadwalController@ubah');
    Route::get('/kirimemail','EmailController@index');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\UniSharp\LaravelFilemanager\Lfm::routes()';
});