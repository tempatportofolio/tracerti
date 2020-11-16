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

Route::get('/', function () {
    return view('layouts.admin.login');
});


/* Dashboard */
Route::get('/dashboard', function () {
    return view('layouts.admin.dashboard');
});
/* End */


/* Pengaturan-Password */
Route::get('/pengaturan-password', function () {
    return view('layouts.admin.pengaturan_password');
});
/* End */


/* Pengaturan-User */
Route::get('/pengaturan-user', function () {
    return view('layouts.admin.pengaturan_user');
});

Route::get('/tambah-user', function () {
    return view('layouts.admin.form.pengaturan_user.tambah_user');
});

Route::get('/edit-user', function () {
    return view('layouts.admin.form.pengaturan_user.edit_user');
});
/* End */


/* Konfigurasi-Website */
Route::get('/konfigurasi-website', function () {
    return view('layouts.admin.konfigurasi_website');
});
/* End */


/* Profile-User */
Route::get('/profil-user', function () {
    return view('layouts.admin.profil_user');
});

Route::get('/detail-profil', function () {
    return view('layouts.admin.form.profil_user.detail_profil');
});
/* End */


/* Jenis-Jawaban */
Route::get('/jenis-jawaban', function () {
    return view('layouts.admin.jenis_jawaban');
});

Route::get('/tambah-jawaban', function () {
    return view('layouts.admin.form.jenis_jawaban.tambah_jawaban');
});

Route::get('/edit-jawaban', function () {
    return view('layouts.admin.form.jenis_jawaban.edit_jawaban');
});
/* End */
