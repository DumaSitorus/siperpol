<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    //
    public function index_admin_sdm()
    {
        return view('admin_sdm.dashboard');
    }

    public function index_police_pns() : View 
    {
        return view('police_pns.dashboard');
    }

    public function index_kawapolres() : View 
    {
        return view('kawapolres.dashboard');
    }

    public function index_department_head() : View 
    {
        return view('department_head.dashboard');
    }
}
