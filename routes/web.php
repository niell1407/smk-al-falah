<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEkstrakurikulerController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AdminPendaftarController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProgramKeahlianController;
use App\Http\Controllers\ProgramKeahlianDetailController;
use App\Http\Controllers\AdminProgramKeahlianController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminAlumniController;




/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


/*
|--------------------------------------------------------------------------
| Profil Sekolah
|--------------------------------------------------------------------------
*/

Route::get('/profil-sekolah', [ProfilController::class, 'index'])
    ->name('profil.index');


/*
|--------------------------------------------------------------------------
| Guru & Tenaga Kependidikan
|--------------------------------------------------------------------------
*/

Route::get('/guru-tenaga-kependidikan', [GuruController::class, 'index'])
    ->name('guru.index');


/*
|--------------------------------------------------------------------------
| Ekstrakurikuler
|--------------------------------------------------------------------------
*/

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler.index');

Route::get('/ekstrakurikuler/detail', [EkstrakurikulerController::class, 'detail'])
    ->name('ekstrakurikuler.detail');


/*
|--------------------------------------------------------------------------
| Berita & Kegiatan
|--------------------------------------------------------------------------
*/

Route::get('/berita-kegiatan', [BeritaController::class, 'index'])
    ->name('berita.index');

Route::get('/berita-kegiatan/{id}', [BeritaController::class, 'show'])
    ->name('berita.show');


/*
|--------------------------------------------------------------------------
| Galeri
|--------------------------------------------------------------------------
*/

Route::get('/galeri', [GaleriController::class, 'index'])
    ->name('galeri.index');


/*
|--------------------------------------------------------------------------
| Pendaftaran
|--------------------------------------------------------------------------
*/

Route::get('/pendaftaran', [PendaftarController::class, 'create'])
    ->name('pendaftar.create');

Route::post('/pendaftaran', [PendaftarController::class, 'store'])
    ->name('pendaftar.store');


/*
|--------------------------------------------------------------------------
| Login Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.process');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->middleware('auth')
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Dashboard Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('admin.index');


/*
|--------------------------------------------------------------------------
| Admin - Foto Ekstrakurikuler
|--------------------------------------------------------------------------
*/

Route::get('/admin/ekstrakurikuler', [AdminEkstrakurikulerController::class, 'index'])
    ->middleware('auth')
    ->name('admin.ekstrakurikuler');

Route::post('/admin/ekstrakurikuler', [AdminEkstrakurikulerController::class, 'store'])
    ->middleware('auth')
    ->name('admin.ekstrakurikuler.store');

Route::delete('/admin/ekstrakurikuler/{id}', [AdminEkstrakurikulerController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.ekstrakurikuler.destroy');


/*
|--------------------------------------------------------------------------
| Admin - Data Pendaftar
|--------------------------------------------------------------------------
*/

Route::get('/admin/pendaftar', [AdminPendaftarController::class, 'index'])
    ->middleware('auth')
    ->name('admin.pendaftar');

Route::delete('/admin/pendaftar/{id}', [AdminPendaftarController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.pendaftar.destroy');


/*
|--------------------------------------------------------------------------
| Admin - Data Guru
|--------------------------------------------------------------------------
*/

Route::get('/admin/guru', [AdminGuruController::class, 'index'])
    ->middleware('auth')
    ->name('admin.guru');

Route::post('/admin/guru', [AdminGuruController::class, 'store'])
    ->middleware('auth')
    ->name('admin.guru.store');

Route::delete('/admin/guru/{id}', [AdminGuruController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.guru.destroy');


/*
|--------------------------------------------------------------------------
| Program Keahlian
|--------------------------------------------------------------------------
*/

Route::get('/program-keahlian', [ProgramKeahlianController::class, 'index'])
    ->name('program-keahlian.index');



 Route::get('/program-keahlian/{jurusan}', [ProgramKeahlianDetailController::class, 'show'])
    ->name('program-keahlian.show');


/*
|--------------------------------------------------------------------------
| Admin - Program Keahlian
|--------------------------------------------------------------------------
*/

Route::get('/admin/program-keahlian', [AdminProgramKeahlianController::class, 'index'])
    ->middleware('auth')
    ->name('admin.program-keahlian');

Route::post('/admin/program-keahlian', [AdminProgramKeahlianController::class, 'store'])
    ->middleware('auth')
    ->name('admin.program-keahlian.store');

Route::delete('/admin/program-keahlian/{id}', [AdminProgramKeahlianController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.program-keahlian.destroy');


/*
|--------------------------------------------------------------------------
| Admin - Galeri
|--------------------------------------------------------------------------
*/

Route::get('/admin/galeri', [AdminGaleriController::class, 'index'])
    ->middleware('auth')
    ->name('admin.galeri');

Route::post('/admin/galeri', [AdminGaleriController::class, 'store'])
    ->middleware('auth')
    ->name('admin.galeri.store');

Route::delete('/admin/galeri/{id}', [AdminGaleriController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.galeri.destroy');


Route::get('/admin/galeri/{id}/edit', [AdminGaleriController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.galeri.edit');

Route::put('/admin/galeri/{id}', [AdminGaleriController::class, 'update'])
    ->middleware('auth')
    ->name('admin.galeri.update');


/*
|--------------------------------------------------------------------------
| Admin - Berita
|--------------------------------------------------------------------------
*/

Route::get('/admin/berita', [AdminBeritaController::class, 'index'])
    ->middleware('auth')
    ->name('admin.berita');

Route::post('/admin/berita', [AdminBeritaController::class, 'store'])
    ->middleware('auth')
    ->name('admin.berita.store');

Route::get('/admin/berita/{id}/edit', [AdminBeritaController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.berita.edit');

Route::put('/admin/berita/{id}', [AdminBeritaController::class, 'update'])
    ->middleware('auth')
    ->name('admin.berita.update');

Route::delete('/admin/berita/{id}', [AdminBeritaController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.berita.destroy');



Route::get('/admin/alumni', [AdminAlumniController::class, 'index'])
    ->middleware('auth')
    ->name('admin.alumni');

Route::post('/admin/alumni', [AdminAlumniController::class, 'store'])
    ->middleware('auth')
    ->name('admin.alumni.store');

Route::get('/admin/alumni/{id}/edit', [AdminAlumniController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.alumni.edit');

Route::put('/admin/alumni/{id}', [AdminAlumniController::class, 'update'])
    ->middleware('auth')
    ->name('admin.alumni.update');

Route::delete('/admin/alumni/{id}', [AdminAlumniController::class, 'destroy'])
    ->middleware('auth')
    ->name('admin.alumni.destroy');