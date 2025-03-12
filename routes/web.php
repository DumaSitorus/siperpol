<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Role:Polisi & PNS
Route::get('/police_pns/dashboard', [DashboardController::class, 'index_police_pns'])->name('police_pns.dashboard')->middleware('auth:police_pns');

//Role: User(Admin SDM)
Route::get('/admin_sdm/dashboard', [DashboardController::class, 'index_admin_sdm'])->name('admin_sdm.dashboard')->middleware('auth:admin_sdm');
// Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth:admin');

//Role: Kapolres & Wakil Kapolres
Route::get('/kawapolres/dashboard', [DashboardController::class, 'index_kawapolres'])->name('kawapolres.dashboard')->middleware('auth:kawapolres');

//Role: Kepala satuan & kepala bagian
Route::get('/department_head/dashboard', [DashboardController::class, 'index_department_head'])->name('department_head.dashboard')->middleware('auth:department_head');
