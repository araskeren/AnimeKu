<?php

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

Route::get('/','HomeController@HalamanUtama');
Auth::routes();

Route::get('/blank', function () {
    return view('user._blank');
});
Route::get('/populer', function () {
    return view('user.anime_populer');
});
Route::get('/browse', function () {
    return view('user.browse_all');
});
Route::get('/browse/byseason', function () {
    return view('user.browse_bySeason');
});
Route::get('browse/bystudio', function () {
    return view('user.browse_byStudio');
});
Route::get('browse/topanime', function () {
    return view('user.browse_TopAnime');
});
Route::get('/history', function () {
    return view('user.history');
});
Route::get('/tonton_nanti', function () {
    return view('user.tonton_nanti');
});
Route::get('/lihat/anime/{id}','HomeController@LihatAnime');
Route::get('/lihat/anime/detail/{id}','HomeController@PreviewAnime');
Route::post('/tambah/komentar/','HomeController@TambahKomentar');
Route::get('/subscribe', function () {
    return view('user.anime_yang_diikuti');
});
//Admin
Route::get('/admin/blank', function () {
    return view('admin._blank');
});
Route::get('/admin/lihat/anime','AnimeController@lihatAllAnime');
Route::post('/admin/tambah/anime','AnimeController@tambahAnime');
Route::get('/admin/edit/anime/{id}','AnimeController@editAnime');
Route::post('/admin/edit/anime/{id}','AnimeController@editAnime');
Route::get('/admin/delete/anime/{id}','AnimeController@deleteAnime');
Route::get('/admin/tambah/episode/{id}','EpisodeController@tambahEpisode');
Route::post('/admin/tambah/episode/{id}','EpisodeController@tambahEpisode');
Route::get('/admin/edit/episode/{id}','EpisodeController@editEpisode');
Route::post('/admin/edit/episode/{id}','EpisodeController@editEpisode');
Route::get('/admin/delete/episode/{id}','EpisodeController@deleteEpisode');
Route::get('/admin/lihat/user','UserController@tambahUser');
Route::post('/admin/lihat/user','UserController@tambahUser');
Route::post('/admin/tambah/user','UserController@tambahUser');
Route::get('/admin/edit/user/{id}','UserController@editUser');
Route::post('/admin/edit/user/{id}','UserController@editUser');
Route::get('/admin/delete/user/{id}','UserController@deleteUser');

Route::get('/admin/lihat/komentar', function () {
    return view('admin.lihat_all_komentar');
});
Route::get('/admin/paket', 'PaketController@tambahPaket');
Route::post('/admin/paket', 'PaketController@tambahPaket');
Route::get('/admin/edit/paket/{id}', 'PaketController@editPaket');
Route::post('/admin/edit/paket/{id}', 'PaketController@editPaket');
Route::get('/admin/delete/paket/{id}', 'PaketController@deletePaket');

Route::get('/admin/transaksi', 'TransaksiController@lihatTransaksi');
Route::get('/admin/transaksi/konfirmasi/{id}', 'TransaksiController@konfirmasi');
