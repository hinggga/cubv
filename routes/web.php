<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('template');
});



Route::get('/dashboardPegawai', function () {
    return view('dashboardPegawai');
})->middleware(['auth', 'verified'])->name('dashboardPegawai');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/daftar-anggotaPegawai',[PegawaiController::class, 'index'])->name('index');





Route::middleware(['auth','admin'])->group(function(){
    Route::get('/dashboard', [DaftarController::class, 'index'])->name('dashboard');

    Route::get('/daftar-anggota',[DaftarController::class, 'index'])->name('index');
    Route::get('/daftar-user',[UserController::class, 'index'])->name('index');
    Route::post('/importexcel',[DaftarController::class, 'importexcel']);
    Route::get('/exportexcel',[DaftarController::class, 'exportexcel']);
    Route::get('/daftar-anggota/{id}/lihatData',[DaftarController::class, 'lihatData'])->name('lihatData');
    Route::get('/daftar-anggota/{id}/editdata',[DaftarController::class, 'editdata'])->name('editdata');
    Route::delete('/delete/{id}/',[DaftarController::class, 'delete'])->name('delete');
    Route::delete('/delete/{id}/',[UserController::class, 'delete'])->name('delete');
    Route::put('update/{id}',[DaftarController::class, 'update'])->name('update');
    Route::get('/tambahanggota',[DaftarController::class, 'show'])->name('tambahanggota');
    Route::post('/tambahanggota',[DaftarController::class, 'store'])->name('tambahanggota');

    Route::post('/simpananpokokimport',[DaftarController::class, 'simpananpokokimport']);
    Route::post('/sapalaimport',[DaftarController::class, 'sapalaimport']);
    Route::post('/paharimport',[DaftarController::class, 'paharimport']);
    Route::post('/simpananwajibimport',[DaftarController::class, 'simpananwajibimport']);
    Route::post('/langkoimport',[DaftarController::class, 'langkoimport']);
    Route::post('/sirayaimport',[DaftarController::class, 'sirayaimport']);
    Route::post('/banihimport',[DaftarController::class, 'banihimport']);
    Route::post('/batuahimport',[DaftarController::class, 'batuahimport']);
    Route::post('/paramuimport',[DaftarController::class, 'paramuimport']);
    Route::post('/bahataimport',[DaftarController::class, 'bahataimport']);
    Route::post('/topokngimport',[DaftarController::class, 'topokngimport']);
});
require __DIR__.'/auth.php';

