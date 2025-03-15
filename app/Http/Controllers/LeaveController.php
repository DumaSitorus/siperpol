<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leave;
use App\Models\LeaveType;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    //

    public function index() : View
    {
        $leaves = Leave::get();

        return view('police_pns.leaves-req-history', compact('leaves'));
    }

    public function create() : View
    {
        //
        $leave_types = LeaveType::get();
        $leaves = Leave::get();
        $users = User::with(['position', 'department',]);

        return view('police_pns.leaves-req-form', compact('users','leaves', 'leave_types'));
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
            'leave_status' => 'Diproses',
        ];

        Leave::create($data);
        return redirect()->to('leave/request')->with('success', 'Berhasil mengajukan cuti');
    }
}
