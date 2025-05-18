<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Leave;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    public function index_admin_sdm(Request $request) : View
    {
        $year = $request->input('year', now()->year);

        $total_leave = Leave::count();
        $processed_leave = Leave::where('leave_statuses_id',2)->count();
        $approve_by_sdm_leave = Leave::where('leave_statuses_id',4)->count();
        $approve_by_kawapolres_leave = Leave::where('leave_statuses_id',6)->count();

        $user_on_leave = Leave::with('user')
            ->where('leave_statuses_id', 6 )
            ->whereDate('start_leave', '<=', now())
            ->whereDate('end_leave', '>=', now())->get();

        $leave_by_type = Leave::select('leave_type_id', DB::raw('count(*) as total'))
            ->groupBy('leave_type_id')
            ->with('leave_type') 
            ->get();

        // $year = now()->year;

        $monthly_leave_data = Leave::select(
                DB::raw('MONTH(start_leave) as month'),
                DB::raw('SUM(CASE WHEN leave_statuses_id IN (1, 2, 4) THEN 1 ELSE 0 END) as processing'),
                DB::raw('SUM(CASE WHEN leave_statuses_id = 6 THEN 1 ELSE 0 END) as approved'),
                DB::raw('SUM(CASE WHEN leave_statuses_id IN (3, 5, 7) THEN 1 ELSE 0 END) as rejected')
            )
            ->whereYear('start_leave', $year)
            ->groupBy(DB::raw('MONTH(start_leave)'))
            ->orderBy(DB::raw('MONTH(start_leave)'))
            ->get();
        
        // Format data untuk Chart.js
        $months = collect(range(1, 12))->map(function ($month) use ($monthly_leave_data) {
            $data = $monthly_leave_data->firstWhere('month', $month);
            return [
                'month' => Carbon::create()->month($month)->translatedFormat('F'), // Nama bulan dalam bahasa lokal
                'processing' => $data->processing ?? 0,
                'approved' => $data->approved ?? 0,
                'rejected' => $data->rejected ?? 0
            ];
        });

        return view('admin_sdm.dashboard', compact('total_leave', 'processed_leave', 'approve_by_sdm_leave', 'approve_by_kawapolres_leave', 'user_on_leave', 'leave_by_type', 'months', 'year'));
    }

    public function update_manual_book(Request $request){
        $request->validate(
            [
            'buku_panduan' => 'required|mimes:pdf|max:10240',
            ],
            [
                'buku_panduan.required'=>'Unggah buku cuti panduan terlebih dahulu',
                'buku_panduan.mimes'=> 'Buku panduan cuti harus berekstensi pdf',
                'buku_panduan.max'=> 'Buku panduan cuti maksimal berukuran 10MB' 
            ]
        );

        $destinationPath = 'bukupanduan/buku_panduan.pdf';

        if (Storage::disk('public')->exists($destinationPath)) {
            Storage::disk('public')->delete($destinationPath);
        }

        $request->file('buku_panduan')->storeAs('bukupanduan', 'buku_panduan.pdf', 'public');

        return back()->with('success', 'Buku panduan berhasil diperbarui.');
    }

    public function index_police_pns() : View 
    {
        $user = Auth::user();

        $total_leave = Leave::where('user_id', $user->id)->count();
        $approved_leave = Leave::where('leave_statuses_id',6)->where('user_id', $user->id)->count();
        $rejected_leave = Leave::whereIn('leave_statuses_id', [3,5,7])->where('user_id', $user->id)->count();

        $ongoing_leave = Leave::with('leave_status')->where('user_id', $user->id)->whereDate('end_leave', '>=', now())->get();

        $is_on_leave = Leave::where('user_id', $user->id)
            ->where('leave_statuses_id', 6 )
            ->whereDate('start_leave', '<=', now())
            ->whereDate('end_leave', '>=', now())  
            ->exists();

        $first_ongoing_leave = $ongoing_leave->first(); 

        $remain_leave = $first_ongoing_leave 
            ? now()->startOfDay()->diffInDays(\Carbon\Carbon::parse($first_ongoing_leave->end_leave)->startOfDay()) : 0;

        return view('police_pns.dashboard', compact('total_leave','approved_leave','rejected_leave', 'ongoing_leave', 'is_on_leave', 'remain_leave'));
    }

    public function index_kawapolres() : View 
    {
        $total_leave = Leave::count();
        $processed_leave = Leave::where('leave_statuses_id',4)->count();
        $approve_by_kawapolres_leave = Leave::where('leave_statuses_id',6)->count();

        $user_on_leave = Leave::with('user')
            ->where('leave_statuses_id', 6 )
            ->whereDate('start_leave', '<=', now())
            ->whereDate('end_leave', '>=', now())->get();

        $leave_by_type = Leave::select('leave_type_id', DB::raw('count(*) as total'))
            ->groupBy('leave_type_id')
            ->with('leave_type') 
            ->get();

        $year = now()->year;

        $monthly_leave_data = Leave::select(
                DB::raw('MONTH(start_leave) as month'),
                DB::raw('SUM(CASE WHEN leave_statuses_id IN (1, 2, 4) THEN 1 ELSE 0 END) as processing'),
                DB::raw('SUM(CASE WHEN leave_statuses_id = 6 THEN 1 ELSE 0 END) as approved'),
                DB::raw('SUM(CASE WHEN leave_statuses_id IN (3, 5, 7) THEN 1 ELSE 0 END) as rejected')
            )
            ->whereYear('start_leave', $year)
            ->groupBy(DB::raw('MONTH(start_leave)'))
            ->orderBy(DB::raw('MONTH(start_leave)'))
            ->get();
        
        $months = collect(range(1, 12))->map(function ($month) use ($monthly_leave_data) {
            $data = $monthly_leave_data->firstWhere('month', $month);
            return [
                'month' => Carbon::create()->month($month)->translatedFormat('F'), // Nama bulan dalam bahasa lokal
                'processing' => $data->processing ?? 0,
                'approved' => $data->approved ?? 0,
                'rejected' => $data->rejected ?? 0
            ];
        });

        return view('kawapolres.dashboard', compact('total_leave', 'processed_leave', 'approve_by_kawapolres_leave', 'user_on_leave', 'leave_by_type', 'months'));
    }

    public function index_department_head() : View 
    {

        $user = Auth::user();

        $total_leave = Leave::where('user_id', $user->id)->count();
        $approved_leave = Leave::where('leave_statuses_id',6)->where('user_id', $user->id)->count();
        $rejected_leave = Leave::whereIn('leave_statuses_id', [3,5,7])->where('user_id', $user->id)->count();

        $ongoing_leave = Leave::with('leave_status')->where('user_id', $user->id)->whereDate('end_leave', '>=', now())->get();

        $is_on_leave = Leave::where('user_id', $user->id)
            ->where('leave_statuses_id', 6 )
            ->whereDate('start_leave', '<=', now())
            ->whereDate('end_leave', '>=', now())  
            ->exists();

        $first_ongoing_leave = $ongoing_leave->first(); 

        $remain_leave = $first_ongoing_leave 
            ? now()->startOfDay()->diffInDays(\Carbon\Carbon::parse($first_ongoing_leave->end_leave)->startOfDay()) : 0;

        $leaves = Leave::whereHas('user', function ($query) use ($user) {
            $query->where('department_id', $user->department_id);
        })->where('user_id', '!=', $user->id)
        ->get();

        $member_pending_leaves = $leaves->where('leave_statuses_id', 1)->count();
        $member_total_leaves = $leaves->count();

        return view('department_head.dashboard', compact('total_leave','approved_leave','rejected_leave', 'ongoing_leave', 'is_on_leave', 'remain_leave', 'member_pending_leaves', 'member_total_leaves'));
    }
}
