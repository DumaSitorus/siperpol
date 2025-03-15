<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\User;
use App\Models\Position;
use Illuminate\View\View;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

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

        return back()->with('success', 'Password pengguna telah direset ke NRP.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'Akun pengguna berhasil dihapus.');
    }

    public function edit($id)
    {
        $users = User::with(['position', 'department'])->where('id', $id)->first();
        $departments = Department::all(); 
        $positions = Position::all(); 

        return view('admin_sdm.edit-account', compact('users', 'departments', 'positions'));

        // return view('admin_sdm.edit-account', compact('users'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'nrp'=> 'required',
            'department' => 'required',
            'position' => 'required',
            'leave_quota' => 'required'
            ],
            [
                'name.required' => 'Nama wajib diisi',
                'nrp.required' => 'NRP wajib diisi',
                'department.required' => 'Satuan/Bagian wajib diisi',
                'position.required' => 'Posisi wajib diisi',
                'leave_quota.required' => 'Sisa kuota cuti tahunan wajib diisi',
            ],
        );

        $data = [
            'name' => $request->name,
            'nrp' => $request->nrp,
            'department_id' => (int) $request->department,
            'position_id' => (int) $request->position,
            'leave_quota' => 12,
        ];

        User::where('id', $id)->update($data);
        return redirect()->to('account')->with('success', 'Berhasil melakukan edit data');
    }

    
    public function import(Request $request)
    {
        
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ], [
            'file.required' => 'File Excel wajib diunggah',
            'file.mimes' => 'File harus berformat .xlsx atau .xls'
        ]);

        Excel::import(new UsersImport, $request->file('file'));
        return redirect()->route('account')->with('success', 'Import Akun pengguna dari Excel berhasil.');
    }

    public function download_tamplate(){
        $filePath = public_path('templates/template_akun.xlsx');
        return response()->download($filePath, 'template_akun.xlsx');
    }

    public function profile()
    {
        $user = User::with(['position', 'department'])->find(Auth::id());

        return view('police_pns.profile', compact('user'));
    }

    public function reset_psw_self(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ], [
            'old_password.required' => 'Kata sandi lama wajib diisi.',
            'new_password.required' => 'Kata sandi baru wajib diisi.',
        ]);

        $user = Auth::User();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Kata sandi lama anda salah.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password berhasil diperbarui.');
    }

    public function update_pp(Request $request)
    {
        $request->validate(
            [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'image.required'=>'Unggah gambar terlebih dahulu',
                'image.mimes'=> 'Photo profil harus berekstensi jpeg, png, atau jpg',
                'image.images'=> 'Photo profil harus berupa file gambar',  
                'image.max'=> 'Photo profil maksimal berukuran 2MB' 
            ]
        );

        $user = Auth::user();

        // Hapus foto lama jika ada
        if (!empty($user->profile_photo)) {
            Storage::disk('public')->delete("images/{$user->profile_photo}");
        }

        // Simpan foto baru di storage dan dapatkan nama file
        $filename = $request->file('image')->store('images', 'public');
        $filename = basename($filename); // Ambil hanya nama file

        // Update database dengan hanya menyimpan nama file
        $user->update([
            'profile_photo' => $filename,
        ]);

        return back()->with('success', 'Foto profil berhasil diperbarui!');
    }
}
