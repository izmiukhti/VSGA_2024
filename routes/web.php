<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\halloController;
use App\Http\Controllers\PageControllerSatu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengajarController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\welcomeController;

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

Route::prefix('/admin')->group(function () {
    Route::get('/dosen', function () {
        echo "<h1> daftar nama dosen </h1>";
    });
    Route::get('/tendik', function () {
        echo "<h1> daftar nama tendik </h1>";
    });
    Route::get('/jurusan', function () {
        echo "<h1> daftar nama jurusan </h1>";
    });
});

Route::fallback(function() {
    return "maaf alamat ini tidak ditemukan";
});

Route::get('/daftar-dosen',[pengajarController::class,'daftarPengajar']);
Route::get('/tabel-pengajar',[pengajarController::class,'tabelPengajar']);
Route::get('/blog-pengajar',[pengajarController::class,'blogPengajar']);

Route::get('pasar-buah',[PageControllerSatu::class,'satu']);

Route::resource('crud',CRUDController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);


Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get('/selamat', function () {
    return view('hello',['name'=>'izmi']);
});

Route::get('/greeting', [
    WelcomeController::class,
    'greeting'
]);

Route::get('/greeting', [
    halloController::class,
    'greeting'
]);

?>