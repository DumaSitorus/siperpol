<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() : View
    {
        $departments = Department::get();

        return view('admin_sdm.add-department', compact('departments'));
    }

    public function store(Request $request)
{
    $request->validate([
        'departments' => 'required|array|min:1',
        'departments.*' => 'required|string|max:255|unique:departments,name',
    ], [
        'departments.required' => 'Harap masukkan setidaknya satu Satuan/Bagian.',
        'departments.*.unique' => 'Nama Satuan/Bagian sudah ada.',
    ]);

    $departments = collect($request->departments)->map(function ($name) {
        return ['name' => $name, 'created_at' => now(), 'updated_at' => now()];
    });

    Department::insert($departments->toArray());

    return back()->with('success', 'Satuan/Bagian berhasil ditambahkan!');
}
}
