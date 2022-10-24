<?php

use App\Http\Controllers\SiswaControler;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('halaman', [SiswaControler::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', SiswaControler::class)->middleware('admin');
Route::resource('upload', UploadController::class);
Route::get('export', [SiswaControler::class, 'export']);
// Route :: get('wilayah', [SiswaController:: class, 'wilayah']);

Route::get('deletesiswa/{id}',[SiswaControler::class,'destroy'])->name('deletesiswa');
// Route::get('tema', function () {
//     return view('tema');
// });

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/', function () {
//     $data = [
//         [
//             'nama' => 'aaaa',
//             'alamat' => 'aaaa'
//         ],

//         [
//             'nama' => 'aaaa',
//             'alamat' => 'aaaa'
//         ]
//     ];
//     return view('dashboard');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// https://fahram.dev/article/laravel-8-make-auth
