<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\BukuMasukController;
use App\Http\Controllers\BukuKeluarController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CodeGenerateController;
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
    return view('layout.login');
})-> name('login');

// Route::get('/stok', function () {
//     return view('layout.stok');
// });

// Route::get('/keluar', function () {
//     return view('layout.keluar');
// });
// Route::get('/user', function () {
//     return view('layout.user');
// });
// Route::get('/stokedit', function () {
//     return view('layout.stokedit');
// });

// Route::get('/keluartambah', function () {
//     return view('layout.keluartambah');
// });
// Route::get('/usertambah', function () {
//     return view('layout.usertambah');
// });
// Route::get('/useredit', function () {
//     return view('layout.useredit');
// });
Route::get('/cetak', function () {
    return view('layout.cetak');
});


//Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/main', [BerandaController::class, 'index'])->name('main');



Route::group(['middleware' => ['auth', 'ceklevel:Admin,Staff,Manajer']], function(){
    Route::get('/main', [BerandaController::class, 'index'])->name('main');
    Route::get('/bukumasuk/cetak_pdf', 'BukuMasukController@cetak_pdf')->name('bukumasuk.cetak_pdf');

    Route::resource('bukumasuk', BukuMasukController::class);
    Route::resource('databuku', DataBukuController::class);
    Route::resource('bukukeluar', BukuKeluarController::class);
    Route::resource('user', UsersController::class);
    Route::resource('code', CodeGenerateController::class);
});