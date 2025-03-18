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

//Role: Admin SDM
Route::get('/admin_sdm/dashboard', [DashboardController::class, 'index_admin_sdm'])->name('admin_sdm.dashboard')->middleware('auth:admin_sdm');
Route::get('/account', [UserController::class, 'index'])->name('account')->middleware('auth:admin_sdm');
Route::get('/account/search', [UserController::class, 'search'])->name('account-search')->middleware('auth:admin_sdm');
Route::get('/account/add', [UserController::class, 'create'])->name('create-account')->middleware('auth:admin_sdm');
Route::post('/account/store', [UserController::class, 'store'])->name('store-account')->middleware('auth:admin_sdm');
Route::get('admin/account/detail/{id}', [UserController::class, 'show'])->name('detail-account')->middleware('auth:admin_sdm');
Route::put('/account/reset-password/{id}', [UserController::class, 'reset_psw_tonrp'])->name('reset-password')->middleware('auth:admin_sdm');
Route::delete('/account/{id}', [UserController::class, 'destroy'])->name('account.destroy')->middleware('auth:admin_sdm');
Route::get('/account/edit/{id}', [UserController::class, 'edit'])->name('edit-account')->middleware('auth:admin_sdm');
Route::put('account/update/{id}', [UserController::class, 'update'])->name('update-account')->middleware('auth:admin_sdm');
Route::post('/account/import', [UserController::class, 'import'])->name('import-account')->middleware('auth:admin_sdm');
Route::get('/download-template', [UserController::class, 'download_tamplate'])->name('download-template')->middleware('auth:admin_sdm');
Route::get('leave-request/history',[LeaveController::class, 'all_history'])->name('leave-req-history')->middleware('auth:admin_sdm');
Route::get('leave-request/search', [LeaveController::class, 'search'])->name('all-leave-search')->middleware('auth:admin_sdm');
Route::get('pending-leave-request/search', [LeaveController::class, 'search_pending'])->name('pending-leave-search-admin')->middleware('auth:admin_sdm');
Route::get('pending-leave-request/history',[LeaveController::class, 'pending_leave'])->name('pending-leave-req')->middleware('auth:admin_sdm');
Route::get('leave-request/detail/{id}',[LeaveController::class, 'show_req'])->name('admin-leave-req-detail')->middleware('auth:admin_sdm');
Route::post('approve/adm_sdm/{id}', [LeaveController::class, 'approve_by_sdm'])->name('approve-by-sdm')->middleware('auth:admin_sdm');
Route::post('reject/adm_sdm/{id}', [LeaveController::class, 'reject_by_sdm'])->name('reject-by-sdm')->middleware('auth:admin_sdm');
Route::post('set_status/{id}', [LeaveController::class, 'set_status'])->name('set_status')->middleware('auth:admin_sdm');


//Role: Kapolres & Wakil Kapolres
Route::get('/kawapolres/dashboard', [DashboardController::class, 'index_kawapolres'])->name('kawapolres.dashboard')->middleware('auth:kawapolres');
Route::post('approve/kawapolres/{id}', [LeaveController::class, 'approve_by_kawapolres'])->name('approve-by-kawapolres')->middleware('auth:kawapolres');
Route::post('reject/kawapolres/{id}', [LeaveController::class, 'reject_by_kawapolres'])->name('reject-by-kawapolres')->middleware('auth:kawapolres');
Route::get('/profile/kawapolres', [UserController::class, 'profile_kawapolres'])->name('profile-kawapolres')->middleware('auth:kawapolres');
Route::get('/account/all', [UserController::class, 'index_by_kawapolres'])->name('account-all')->middleware('auth:kawapolres');
Route::get('/account/detail/{id}', [UserController::class, 'show_account'])->name('detail-account-user')->middleware('auth:kawapolres');
Route::get('/account/search-by', [UserController::class, 'search_by_kawapolres'])->name('account-search-all')->middleware('auth:kawapolres');
Route::get('kawapolres/leave-request/history',[LeaveController::class, 'history_all'])->name('leave-req-history-all')->middleware('auth:kawapolres');
Route::get('kawapolres/leave-request/search', [LeaveController::class, 'search_by_wakapolres'])->name('leave-search')->middleware('auth:kawapolres');
Route::get('kawapolres/pending-leave-request/search', [LeaveController::class, 'search_pending_by_wakapolres'])->name('pending-leave-search')->middleware('auth:kawapolres');
Route::get('kawapolres/pending-leave-request/history',[LeaveController::class, 'pending_leave_all'])->name('pending-leave-req-all')->middleware('auth:kawapolres');
Route::get('kawapolres/leave-request/detail/{id}',[LeaveController::class, 'show_req_detail'])->name('kawapolres-leave-req')->middleware('auth:kawapolres');
Route::post('approve/kawapolres/{id}', [LeaveController::class, 'approve_by_kawapolres'])->name('approve-by-kawapolres')->middleware('auth:kawapolres');
Route::post('reject/kawapolres/{id}', [LeaveController::class, 'reject_by_kawapolres'])->name('reject-by-kawapolres')->middleware('auth:kawapolres');

//Role: Kepala satuan & kepala bagian
Route::get('/department_head/dashboard', [DashboardController::class, 'index_department_head'])->name('department_head.dashboard')->middleware('auth:department_head');
Route::get('/profile_head', [UserController::class, 'profile_head'])->name('profile-head')->middleware('auth:department_head');
Route::get('/leave_head/add', [LeaveController::class, 'create_req_head'])->name('create-head-leave-req')->middleware('auth:department_head');
Route::post('leave-head/send', [LeaveController::class, 'store_head_req'])->name('store-head-leave-req')->middleware('auth:department_head');
Route::get('leave-head/request', [LeaveController::class, 'history'])->name('head-leave-req')->middleware('auth:department_head');
Route::get('head-leave/request/detail/{id}',[LeaveController::class, 'show_head_req'])->name('head-leave-req-detail')->middleware('auth:department_head');
Route::get('head-leave-request/detail/{id}',[LeaveController::class, 'show_req_self'])->name('self-head-req-detail')->middleware('auth:department_head');
Route::get('leave/member-leave-request/{department_id}',[LeaveController::class, 'show_member_req'])->name('member-leave-req')->middleware('auth:department_head');
Route::get('/member-leave/search', [LeaveController::class, 'search_member_leave'])->name('member-leave-search')->middleware('auth:department_head');
Route::post('approve/head/{id}', [LeaveController::class, 'approve_by_head'])->name('approve-by-head')->middleware('auth:department_head');
Route::post('reject/head/{id}', [LeaveController::class, 'reject_by_head'])->name('reject-by-head')->middleware('auth:department_head');
Route::get('head/account/detail/{id}', [UserController::class, 'show_account_in_head'])->name('detail-account-user-head')->middleware('auth:department_head');

//Role:Polisi & PNS
Route::get('/police_pns/dashboard', [DashboardController::class, 'index_police_pns'])->name('police_pns.dashboard')->middleware('auth:police_pns');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth:police_pns');
Route::post('/profile/add-profile-photo', [UserController::class, 'update_pp'])->name('update-profile-photo')->middleware('auth:police_pns,department_head,kawapolres');
Route::post('/profile/reset-password', [UserController::class, 'reset_psw_self'])->name('reset-password-self')->middleware('auth:police_pns,department_head,kawapolres');
Route::get('/leave/add', [LeaveController::class, 'create'])->name('create-leave-req')->middleware('auth:police_pns');
Route::post('leave/send', [LeaveController::class, 'store'])->name('store-leave-req')->middleware('auth:police_pns');
Route::get('leave/request',[LeaveController::class, 'index'])->name('leave-req')->middleware('auth:police_pns');
Route::get('leave/request/detail/{id}',[LeaveController::class, 'show'])->name('leave-req-detail')->middleware('auth:police_pns');


//test route
Route::get('/upload', function(){
    Storage::disk('public')->put('example1.txt', 'halo00');
});

Route::get('/getthefile', function(){
    // return asset('storage/example.txt');
    return Storage::get('example1.txt');
});

//all
Route::get('/download-evident/{filename}', [LeaveController::class, 'download_evident'])->name('download.evident');

