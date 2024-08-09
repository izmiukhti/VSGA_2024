<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello VSGA';
});

Route::get('/word', function () {
    return 'hello Dunia';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 2231740046';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/{commit}', function ($post, $comment) {
    return 'Pos ke-' . $post . " Komentar ke-: " . $comment;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' . $name;
});

Route::get('/kodebarang/{jenis?}', function ($jk='k01', $mrk='nokia') {
    return 'Kode barang ' . $jk . ' dan nama barang ' . $mrk;
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini', function () {
    return '<h1> pesan disini </h1>';
});
Route::redirect('/contact-us', '/pesandisini');