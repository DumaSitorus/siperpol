<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\LeaveType;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //
    public function index() : View
    {
        //
        $leave_types = LeaveType::get();
        $leaves = Leave::get();
        $users = User::with(['position', 'department',]);

        return view('police_pns.leaves-req-form', compact('users','leaves', 'leave_types'));
    }
}
