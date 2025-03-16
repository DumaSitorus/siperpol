<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leave;
use App\Models\Position;
use App\Models\LeaveType;
use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LeaveController extends Controller
{
    public function index() : View
    {
        $user_id = Auth::user()->id;
        $leaves = Leave::with(['leave_type', 'leave_status'])->where('user_id', $user_id)->paginate(10);

        return view('police_pns.leaves-req-history', compact('leaves',));
    }

    public function history() : View
    {

        $user_id = Auth::user()->id;
        $leaves = Leave::with(['leave_type', 'leave_status'])->where('user_id', $user_id)->paginate(10);

        return view('department_head.leaves-req-history', compact('leaves',));
    }

    public function all_history() : View 
    {
        $leaves = Leave::with(['leave_type', 'user'])->paginate(10);

        return view('admin_sdm.history-leaves-req', compact('leaves',));
    }

    public function pending_leave() : View 
    {
        $pending = "Diizinkan" ;
        $leaves = Leave::with(['leave_type', 'user'])->whereNot('leave_status', $pending)->paginate(10);

        return view('admin_sdm.pending-leaves-req', compact('leaves',));
    }

    public function create() : View
    {
        //
        $leave_types = LeaveType::get();
        $leaves = Leave::get();
        $users = User::with(['position', 'department',]);

        return view('police_pns.leaves-req-form', compact('users','leaves', 'leave_types'));
    }

    public function create_req_head() : View
    {
        //
        $leave_types = LeaveType::get();
        $leaves = Leave::get();
        $users = User::with(['position', 'department',]);

        return view('department_head.leaves-req-form', compact('users','leaves', 'leave_types'));
    }

    public function store(Request $request) {
        $request->validate(
            [
                'leave_type' => 'required',
                'start_leave' => 'required',
                'end_leave' => 'required|after_or_equal:start_leave',
                'evident_1' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                'evident_2' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                'notes' => 'required',
            ],
            [
                'leave_type.required' => 'Jenis Cuti yang ingin diajukan wajib diisi',
                'start_leave.required' => 'Hari pertama Cuti wajib diisi',
                'end_leave.required' => 'Hari terakhir Cuti wajib diisi',
                'end_leave.after_or_equal' => 'Hari terakhir Cuti harus setelah atau sama dengan hari pertama Cuti',
                'evident_1.required' => 'Wajib unggah surat penyerta atau bukti',
                'evident_1.file' => 'File harus dalam format yang valid yaitu berupa file pdf/word atau gambar jpg, jpeg,png',
                'evident_1.mimes' => 'Format file harus pdf, doc, docx, png, jpg, atau jpeg',
                'evident_1.max' => 'Ukuran file maksimal 2MB',
                'evident_2.file' => 'File kedua harus dalam format yang valid yaitu file pdf/word atau gambar jpg, jpeg,png',
                'evident_2.mimes' => 'Format file kedua harus pdf, doc, docx, png, jpg, atau jpeg',
                'evident_2.max' => 'Ukuran file kedua maksimal 2MB',
                'notes.required' => 'Catatan Cuti wajib diisi',
        
            ],
        );

        $user_id = Auth::user()->id;

        $evident_1 = $request->file('evident_1')->store('evident', 'public');
        $evident_1 = basename($evident_1);

        if (!empty($request->file('evident_2'))) {
            $evident_2 = $request->file('evident_2')->store('evident', 'public');
            $evident_2 = basename($evident_2);
        } else {
            $evident_2 = null;
        }
        

        $data = [
            'user_id' => $user_id,
            'leave_type_id' => $request->leave_type,
            'start_leave' => $request->start_leave,
            'end_leave' => $request->end_leave,
            'evident_1' => $evident_1,
            'evident_2' => $evident_2,
            'notes' => $request->notes,
            'leave_statuses_id' => 1,
        ];

        Leave::create($data);
        return redirect()->to('leave/request')->with('success', 'Berhasil mengajukan cuti');
    }

    public function store_head_req(Request $request) {
        $request->validate(
            [
                'leave_type' => 'required',
                'start_leave' => 'required',
                'end_leave' => 'required|after_or_equal:start_leave',
                'evident_1' => 'required|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                'evident_2' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:2048',
                'notes' => 'required',
            ],
            [
                'leave_type.required' => 'Jenis Cuti yang ingin diajukan wajib diisi',
                'start_leave.required' => 'Hari pertama Cuti wajib diisi',
                'end_leave.required' => 'Hari terakhir Cuti wajib diisi',
                'end_leave.after_or_equal' => 'Hari terakhir Cuti harus setelah atau sama dengan hari pertama Cuti',
                'evident_1.required' => 'Wajib unggah surat penyerta atau bukti',
                'evident_1.file' => 'File harus dalam format yang valid yaitu berupa file pdf/word atau gambar jpg, jpeg,png',
                'evident_1.mimes' => 'Format file harus pdf, doc, docx, png, jpg, atau jpeg',
                'evident_1.max' => 'Ukuran file maksimal 2MB',
                'evident_2.file' => 'File kedua harus dalam format yang valid yaitu file pdf/word atau gambar jpg, jpeg,png',
                'evident_2.mimes' => 'Format file kedua harus pdf, doc, docx, png, jpg, atau jpeg',
                'evident_2.max' => 'Ukuran file kedua maksimal 2MB',
                'notes.required' => 'Catatan Cuti wajib diisi',
        
            ],
        );

        $user_id = Auth::user()->id;

        $evident_1 = $request->file('evident_1')->store('evident', 'public');
        $evident_1 = basename($evident_1);

        if (!empty($request->file('evident_2'))) {
            $evident_2 = $request->file('evident_2')->store('evident', 'public');
            $evident_2 = basename($evident_2);
        } else {
            $evident_2 = null;
        }
        

        $data = [
            'user_id' => $user_id,
            'leave_type_id' => $request->leave_type,
            'start_leave' => $request->start_leave,
            'end_leave' => $request->end_leave,
            'evident_1' => $evident_1,
            'evident_2' => $evident_2,
            'notes' => $request->notes,
            'leave_statuses_id' => 2,
        ];

        Leave::create($data);
        return redirect()->to('leave-head/request')->with('success', 'Berhasil mengajukan cuti');
    }

    public function show($id) : View
    {
        $leave_types = LeaveType::all();
        $positions = Position::all();
        $departments = Department::all();
        $user = Auth::user();

        $leave = Leave::with(['leave_type', 'user.position', 'user.department', 'leave_status'])
                ->findOrFail($id);

        return view('police_pns.leave-req-detail', compact('leave', 'leave_types', 'positions', 'departments', 'user'));
    }

    public function show_head_req($id) : View
    {
        $leave_types = LeaveType::all();
        $positions = Position::all();
        $departments = Department::all();
        $user = Auth::user();

        $leave = Leave::with(['leave_type', 'user.position', 'user.department'])
                ->findOrFail($id);

        return view('department_head.leave-req-detail', compact('leave', 'leave_types', 'positions', 'departments', 'user'));
    }

    public function show_req_self($id) : View
    {
        $leave_types = LeaveType::all();
        $positions = Position::all();
        $departments = Department::all();
        $user = Auth::user();

        $leave = Leave::with(['leave_type', 'user.position', 'user.department'])
                ->findOrFail($id);

        return view('department_head.leave-req-detail-self', compact('leave', 'leave_types', 'positions', 'departments', 'user'));
    }

    public function show_req($id) : View
    {
        $leave_types = LeaveType::all();
        $positions = Position::all();
        $departments = Department::all();
        $user = Auth::user();

        $leave = Leave::with(['leave_type', 'user.position', 'user.department'])
                ->findOrFail($id);

        return view('admin_sdm.leave-req-detail', compact('leave', 'leave_types', 'positions', 'departments', 'user'));
    }

    public function download_evident($filename){
        $filePath = 'evident/' . $filename; 

        // Cek apakah file ada
        if (!Storage::disk('public')->exists($filePath)) {
            return back()->with('error', 'File tidak ditemukan.');
        }

        // Download file
        return Storage::disk('public')->download($filePath);
    }

    public function show_member_req($department_id) {
        $user = Auth::user(); 
        $leaves = Leave::whereHas('user', function ($query) use ($user) {
            $query->where('department_id', $user->department_id);
        })->where('user_id', '!=', $user->id)
        ->get();
    
        return view('department_head.member-leaves-req-history', compact('leaves'));
    }

    public function search(Request $request)
    {
        $query = Leave::with(['user', 'leave_type']);

        if ($request->has('search') && $request->filled('search')) {
            $column = $request->input('column', 'name');
            $search = $request->input('search');
    
            $allowedColumns = ['name', 'nrp'];
            if (in_array($column, $allowedColumns)) {
                $query->whereHas('user', function ($q) use ($search, $column) {
                    $q->where($column, 'LIKE', '%' . $search . '%');
                });
            }
        }

        $leaves = $query->paginate(10);

        return view('admin_sdm.history-leaves-req', ['leaves' => $leaves]);
    }

    public function search_member_leave(Request $request)
    {
        $user = Auth::user();
        $query = Leave::whereHas('user', function ($query) use ($user) {
            $query->where('department_id', $user->department_id);
        });

        if ($request->has('search') && $request->has('column')) {
            $search = $request->input('search');
            $column = $request->input('column');

            if ($column === 'name') {
                $query->whereHas('user', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            } elseif ($column === 'nrp') {
                $query->whereHas('user', function ($q) use ($search) {
                    $q->where('nrp', 'like', '%' . $search . '%');
                });
            }
        }

        $leaves = $query->get();

        return view('department_head.member-leaves-req-history', compact('leaves'));
    }

    public function approve_by_head($id){
        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 2;
        $leave->save();
        return back()->with('success', 'Berhasil, cuti diberi Izin');
    }

    public function reject_by_head(Request $request ,$id){

        $request->validate(
            [
                'leave_rejection_reason' => 'required',
            ],
            [
                'leave_rejection_reason.required' => '*Alasan Penolakan harus diisi',
        
            ],
        );

        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 3;
        $leave->leave_rejection_reason = $request->leave_rejection_reason;

        $leave->save();
        return back()->with('success', 'Berhasil, cuti ditolak');
    }

    public function approve_by_sdm($id){
        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 4;
        $leave->save();
        return back()->with('success', 'Berhasil, cuti diberi Izin');
    }

    public function reject_by_sdm($id){
        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 5;
        $leave->save();
        return back()->with('success', 'Berhasil, cuti ditolak');
    }

    public function approve_by_kawapolres($id){
        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 6;
        $leave->save();
        return back()->with('success', 'Berhasil, cuti diberi Izin');
    }

    public function reject_by_kawapolres($id){
        $leave = Leave::findOrFail($id);

        $leave->leave_statuses_id = 7;
        $leave->save();
        return back()->with('success', 'Berhasil, cuti ditolak');
    }

}
