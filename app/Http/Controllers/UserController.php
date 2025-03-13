<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Position;
use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //
        $users = User::with(['position', 'department'])->paginate(10);

        return view('admin_sdm.accounts-list', compact('users'));
    }

    public function search(Request $request)
    {
        $query = User::with(['position', 'department']);

        if ($request->has('search') && $request->filled('search')) {
            $column = $request->input('column', 'name'); // Default ke 'name' jika tidak dipilih
            $search = $request->input('search');

            // Pastikan kolom yang dicari valid untuk mencegah SQL Injection
            $allowedColumns = ['name', 'nrp', 'department_name'];
            if (in_array($column, $allowedColumns)) {
                if ($column === 'department_name') {
                    // Jika pencarian berdasarkan satuan (department_name), gunakan relasi
                    $query->whereHas('department', function ($q) use ($search) {
                        $q->where('name', 'LIKE', '%' . $search . '%');
                    });
                } else {
                    // Pencarian langsung pada tabel users
                    $query->where($column, 'LIKE', '%' . $search . '%');
                }
            }
        }

        $users = $query->paginate(10);

        return view('admin_sdm.accounts-list', ['users' => $users]);
    }

    public function create(){
        $positions = Position::get();
        $departments = Department::get();

        return view('admin_sdm.add-account-form', compact('positions', 'departments'));
    }

    public function store(Request $request){
        Session::flash('name', $request->name);
        Session::flash('nrp', $request->nrp);

        $request->validate([
            'name' => 'required',
            'nrp'=> 'required|unique:users,nrp',
            'department' => 'required',
            'position' => 'required',
            ],
            [
                'name.required' => 'Nama wajib diisi',
                'nrp.required' => 'NRP wajib diisi',
                'nrp.unique' => 'Pengguna dengan NRP ini sudah terdaftar sebelumnya',
                'department.required' => 'Satuan/Bagian wajib diisi',
                'position.required' => 'Posisi wajib diisi',
            ],
        );

        $password = $request->nrp;
        $hashedPassword = Hash::make($password);

        $defaultProfilePhoto = 'images/empty_profile_photo.png';

        $data = [
            'name' => $request->name,
            'nrp' => $request->nrp,
            'password' => $hashedPassword,
            'department_id' => (int) $request->department,
            'position_id' => (int) $request->position,
            'profile_photo' => $defaultProfilePhoto,
            'leave_quota' => 12,
        ];

        User::create($data);
        return redirect()->to('account')->with('success', 'Berhasil menambahkan data');
        // dd($data);
    }

    public function show($id){
        $users = User::with(['position', 'department'])->findOrFail($id);

        return view('admin_sdm.account-detail', compact('users'));
    }

    public function reset_psw_tonrp(Request $request,$id){
        $request->validate([
            'admin_password' => 'required',
            ],
        );

        $admin = Auth::User();
        if (!Hash::check($request->admin_password, $admin->password)) {
            return back()->with('error', 'Kata sandi admin salah.');
        }

        $user = User::findOrFail($id);

        $user->password = Hash::make($user->nrp);
        $user->save();

        $users = User::with(['position', 'department'])->findOrFail($id);
        return back()->with('success', 'Password pengguna telah direset ke NRP.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Akun pengguna berhasil dihapus.');
    }

}
