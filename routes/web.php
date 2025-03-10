<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKKController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\WilayahController;

Route::get('/', function () {
    return view('homepage');
});

// Rute Autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute yang memerlukan autentikasi
// Route untuk superadmin
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/superadmin/index', [DashboardController::class, 'index'])->name('superadmin.index');
    Route::get('/superadmin/biodata/index', [BiodataController::class, 'index'])->name('superadmin.biodata.index');
    Route::get('/superadmin/biodata/create', [BiodataController::class, 'create'])->name('superadmin.biodata.create');
    Route::post('/superadmin/biodata/store', [BiodataController::class, 'store'])->name('superadmin.biodata.store');
    Route::delete('/superadmin/biodata/{id}', [BiodataController::class, 'destroy'])->name('superadmin.biodata.destroy');
    Route::get('/superadmin/biodata/{nik}/edit', [BiodataController::class, 'edit'])->name('superadmin.biodata.edit');
    Route::put('/superadmin/biodata/{nik}', [BiodataController::class, 'update'])->name('superadmin.biodata.update');
    Route::get('/superadmin/datakk/index', [DataKKController::class, 'index'])->name('superadmin.datakk.index');
    Route::get('/superadmin/masterdata/kk', [DataKKController::class, 'masterdata'])->name('superadmin.masterdata.kk');
    Route::get('/superadmin/datakk/create', [DataKKController::class, 'create'])->name('superadmin.datakk.create');
    Route::post('/kk', [DataKKController::class, 'store'])->name('kk.store');
    Route::get('/superadmin/datakk/{id}/edit', [DataKKController::class, 'edit'])->name('superadmin.datakk.update');
    Route::put('/kk/{id}', [DataKKController::class, 'update'])->name('kk.update');
    Route::delete('/datakk/{id}', [DataKKController::class, 'destroy'])->name('superadmin.destroy');
    Route::get('/superadmin/datamaster/job/index', [JobController::class, 'index'])->name('superadmin.datamaster.job.index');
    Route::get('/superadmin/datamaster/job/create', [JobController::class, 'create'])->name('superadmin.datamaster.job.create');
    Route::post('/superadmin/datamaster/job', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/superadmin/datamaster/job/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/superadmin/datamaster/job/{id}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/superadmin/datamaster/job/{id}', [JobController::class, 'destroy'])->name('superadmin.datamaster.job.destroy');
    Route::get('/superadmin/datamaster/wilayah/provinsi/index', [WilayahController::class, 'showProvinsi'])->name('superadmin.datamaster.wilayah.provinsi.index');
    Route::get('/superadmin/datamaster/wilayah/kabupaten/{provinceCode}', [WilayahController::class, 'showKabupaten'])->name('superadmin.datamaster.wilayah.kabupaten.index');
    Route::get('/superadmin/datamaster/wilayah/kecamatan/{kotaCode}', [WilayahController::class, 'showKecamatan'])->name('superadmin.datamaster.wilayah.kecamatan.index');
});

// Route untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/index', function () {
        return view('admin.index');
    });
});

// Route untuk operator
Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::get('/operator/index', function () {
        return view('operator.index');
    });
});

// Route untuk user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/index', function () {
        return view('user.index');
    });
});

Route::get('/fetch-heads-of-family', [KKController::class, 'fetchHeadsOfFamily']);
Route::get('/fetch-all-citizens', [DataKKController::class, 'fetchAllCitizens']);
Route::get('/getFamilyMembers', [DataKKController::class, 'getFamilyMembers'])->name('getFamilyMembers');
Route::get('/superadmin/datakk/{kk_id}/family-members', [DataKKController::class, 'getFamilyMembersByKK'])->name('superadmin.datakk.family-members');
Route::get('/biodata/family-members', [BiodataController::class, 'getFamilyMembers'])->name('biodata.family-members');

// Update the wilayah route to use proper parameters
Route::get('/api/wilayah/provinsi/{id}/kota', [WilayahController::class, 'getKotaByProvinsi'])
    ->name('wilayah.kota')
    ->where('id', '[0-9]+');

Route::get('/api/wilayah/kota/{id}/kecamatan', [WilayahController::class, 'getKecamatanByKota'])
    ->name('wilayah.kecamatan')
    ->where('id', '[0-9]+');

Route::get('/api/wilayah/kecamatan/{id}/kelurahan', [WilayahController::class, 'getDesaByKecamatan'])
    ->name('wilayah.kelurahan')
    ->where('id', '[0-9]+');


