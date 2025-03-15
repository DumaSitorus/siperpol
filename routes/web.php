<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('login.login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Role: User(Admin SDM)
Route::get('/admin_sdm/dashboard', [DashboardController::class, 'index_admin_sdm'])->name('admin_sdm.dashboard')->middleware('auth:admin_sdm');
Route::get('/account', [UserController::class, 'index'])->name('account')->middleware('auth:admin_sdm');
Route::get('/account/search', [UserController::class, 'search'])->name('account-search')->middleware('auth:admin_sdm');
Route::get('/account/add', [UserController::class, 'create'])->name('create-account')->middleware('auth:admin_sdm');
Route::post('/account/store', [UserController::class, 'store'])->name('store-account')->middleware('auth:admin_sdm');
Route::get('/account/detail/{id}', [UserController::class, 'show'])->name('detail-account')->middleware('auth:admin_sdm');
Route::post('/account/reset-password/{id}', [UserController::class, 'reset_psw_tonrp'])->name('reset-password')->middleware('auth:admin_sdm');
Route::delete('/account/{id}', [UserController::class, 'destroy'])->name('account.destroy')->middleware('auth:admin_sdm');
Route::get('/account/edit/{id}', [UserController::class, 'edit'])->name('edit-account')->middleware('auth:admin_sdm');
Route::put('account/update/{id}', [UserController::class, 'update'])->name('update-account')->middleware('auth:admin_sdm');
Route::post('/account/import', [UserController::class, 'import'])->name('import-account')->middleware('auth:admin_sdm');
Route::get('/download-template', [UserController::class, 'download_tamplate'])->name('download-template')->middleware('auth:admin_sdm');

//Role: Kapolres & Wakil Kapolres
Route::get('/kawapolres/dashboard', [DashboardController::class, 'index_kawapolres'])->name('kawapolres.dashboard')->middleware('auth:kawapolres');

//Role: Kepala satuan & kepala bagian
Route::get('/department_head/dashboard', [DashboardController::class, 'index_department_head'])->name('department_head.dashboard')->middleware('auth:department_head');

//Role:Polisi & PNS
Route::get('/police_pns/dashboard', [DashboardController::class, 'index_police_pns'])->name('police_pns.dashboard')->middleware('auth:police_pns');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth:police_pns');
Route::post('/profile/add-profile-photo', [UserController::class, 'update_pp'])->name('update-profile-photo')->middleware('auth:police_pns');
Route::post('/profile/reset-password', [UserController::class, 'reset_psw_self'])->name('reset-password-self')->middleware('auth:police_pns');
Route::get('/leave/add', [LeaveController::class, 'index'])->name('create-leave-req')->middleware('auth:police_pns');

//test route
Route::get('/upload', function(){
    Storage::disk('public')->put('example1.txt', 'halo00');
});

Route::get('/getthefile', function(){
    // return asset('storage/example.txt');
    return Storage::get('example1.txt');
});