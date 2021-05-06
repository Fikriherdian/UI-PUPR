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

Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){
    Route::get('/file-manager',function(){
        return view('backend.include.file-manager');
    })->name('file-manager');
    Route::view('/','backend.admin')->name('admin');
    /* ----------------------------       BERITA       ---------------------------- */
    Route::get('/berita/tampil','BeritaController@index')->name('berita');
    Route::get('/berita/tambah','BeritaController@tambah')->name('tambahberita');
    Route::post('/berita/store','BeritaController@store')->name('storeberita');
    Route::get('/berita/edit/{id}','BeritaController@edit')->name('editberita');
    Route::post('/berita/update/{id}','BeritaController@update')->name('updateberita');
    Route::get('/berita/delete/{id}','BeritaController@destroy')->name('deleteberita');
    /* ----------------------------       KATEGORI       ---------------------------- */
    Route::get('/kategori/tampil','KategoriController@index')->name('kategori');
    route::get('/kategori/tambah','KategoriController@tambah')->name('tambahkategori');
    Route::post('/kategori/store','KategoriController@store')->name('storekategori');
    Route::get('/kategori/edit/{id}','KategoriController@edit')->name('editkategori');
    Route::post('/kategori/update/{id}','KategoriController@update')->name('updatekategori');
    Route::get('/kategori/delete/{id}','KategoriController@destroy')->name('deletekategori');
    /* ----------------------------       SETTINGS       ---------------------------- */
    Route::get('/setting/edit/{id}','SettingController@edit')->name('editsetting');
    Route::post('/setting/update/{id}','SettingController@update')->name('updatesetting');
    /* ----------------------------       GALERI       ---------------------------- */
    Route::get('/galeri/tampil','GaleriController@index')->name('galeri');
    route::get('/galeri/tambah','GaleriController@tambah')->name('tambahgaleri');
    Route::post('/galeri/store','GaleriController@store')->name('storegaleri');
    Route::get('/galeri/edit/{id}','GaleriController@edit')->name('editgaleri');
    Route::post('/galeri/update/{id}','GaleriController@update')->name('updategaleri');
    Route::get('/galeri/delete/{id}','GaleriController@destroy')->name('deletegaleri');
    /* ----------------------------       BANNER       ---------------------------- */
    Route::get('/banner/tampil','BannerController@index')->name('banner');
    route::get('/banner/tambah','BannerController@tambah')->name('tambahbanner');
    Route::post('/banner/store','BannerController@store')->name('storebanner');
    Route::get('/banner/edit/{id}','BannerController@edit')->name('editbanner');
    Route::post('/banner/update/{id}','BannerController@update')->name('updatebanner');
    Route::get('/banner/delete/{id}','BannerController@destroy')->name('deletebanner');
    /* ----------------------------       APLIKASI       ---------------------------- */
    Route::get('/aplikasi/tampil','AplikasiController@index')->name('aplikasi');
    route::get('/aplikasi/tambah','AplikasiController@tambah')->name('tambahaplikasi');
    Route::post('/aplikasi/store','AplikasiController@store')->name('storeaplikasi');
    Route::get('/aplikasi/edit/{id}','AplikasiController@edit')->name('editaplikasi');
    Route::post('/aplikasi/update/{id}','AplikasiController@update')->name('updateaplikasi');
    Route::get('/aplikasi/delete/{id}','AplikasiController@destroy')->name('deleteaplikasi');
    /* ----------------------------       PAGE       ---------------------------- */
    Route::get('/page/tampil','PageController@index')->name('page');
    Route::get('/page/tambah','PageController@tambah')->name('tambahpage');
    Route::post('/page/store','PageController@store')->name('storepage');
    Route::get('/page/edit/{id}','PageController@edit')->name('editpage');
    Route::post('/page/update/{id}','PageController@update')->name('updatepage');
    Route::get('/page/delete/{id}','PageController@destroy')->name('deletepage');
    /* ----------------------------       SOSMED       ---------------------------- */
    Route::get('/sosmed/tampil','SosmedController@index')->name('sosmed');
    route::get('/sosmed/tambah','SosmedController@tambah')->name('tambahsosmed');
    Route::post('/sosmed/store','SosmedController@store')->name('storesosmed');
    Route::get('/sosmed/edit/{id}','SosmedController@edit')->name('editsosmed');
    Route::post('/sosmed/update/{id}','SosmedController@update')->name('updatesosmed');
    Route::get('/sosmed/delete/{id}','SosmedController@destroy')->name('deletesosmed');
    /* ----------------------------       QUOTE       ---------------------------- */
    // Route::get('/quote/tampil','QuoteController@index')->name('quote');
    // route::get('/quote/tambah','QuoteController@tambah')->name('tambahquote');
    // Route::post('/quote/store','QuoteController@store')->name('storequote');
    // Route::get('/quote/edit/{id}','QuoteController@edit')->name('editquote');
    // Route::post('/quote/update/{id}','QuoteController@update')->name('updatequote');
    // Route::get('/quote/delete/{id}','QuoteController@destroy')->name('deletequote');
    Route::resource('quote','QuoteController');
    /* ----------------------------       USER       ---------------------------- */
    Route::resource('user','UserController');
    Route::resource('role','RoleController');
    Route::get('/kirimemail','EmailController@index');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\UniSharp\LaravelFilemanager\Lfm::routes()';
});