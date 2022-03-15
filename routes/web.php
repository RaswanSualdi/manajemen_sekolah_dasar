<?php


use App\Http\Controllers\NilaiSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruMapelController;
use App\Http\Controllers\siswaKelas1Controller;
use App\Http\Controllers\siswaKelas2Controller;
use App\Http\Controllers\siswaKelas3Controller;
use App\Http\Controllers\siswaKelas4Controller;
use App\Http\Controllers\siswaKelas5Controller;
use App\Http\Controllers\siswaKelas6Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\DashboardController;

Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/postLogin',[AuthController::class,'postLogin'])->name('postLogin');

Route::get('/register', [RegisterUserController::class, 'indexregister'])->name('register');
Route::post('/postRegister', [RegisterUserController::class, 'postRegister'])->name('postRegister');


Route::group(['middleware'=> ['auth','CheckRole:admin']], function(){
    Route::get('/dashboard/admin',[DashboardController::class, 'index'])->name('dashboard.siswa');
    Route::resource('siswa',SiswaController::class);
    Route::resource('guru',guruController::class);
    Route::resource('nilai.siswa',NilaiSiswaController::class)->shallow();
    Route::resource('mapel.guru', GuruMapelController::class)->shallow();
    Route::resource('mapel',MapelController::class);
    Route::resource('siswakelas1',siswaKelas1Controller::class);
    Route::resource('siswakelas2',siswaKelas2Controller::class);
    Route::resource('siswakelas3',siswaKelas3Controller::class);
    Route::resource('siswakelas4',siswaKelas4Controller::class);
    Route::resource('siswakelas5',siswaKelas5Controller::class);
    Route::resource('siswakelas6',siswaKelas6Controller::class);
});

Route::group(['middleware'=>['auth','CheckRole:guru,admin,siswa']], function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
});

