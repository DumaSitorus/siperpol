<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserAuthVerifyRequest;

class AuthController extends Controller
{
    public function index() : View 
    {
        return view('login.login');
    }

    public function verify(UserAuthVerifyRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        $guards = [
        'kawapolres' => [1, 2],
        'admin_sdm' => [3],
        'department_head' => [4, 5],
        'police_pns' => [6, 7]
        ];

        foreach ($guards as $guard => $positions) {
            if (Auth::guard($guard)->attempt([
                'nrp' => $data['nrp'],
                'password' => $data['password']
            ])) {
                if (in_array(Auth::guard($guard)->user()->position_id, $positions)) {
                    $request->session()->regenerate();
                    return redirect()->intended("$guard/dashboard");
                } else {
                    Auth::guard($guard)->logout();
                }
            }
        }
        return redirect(route('login'))->with('msg', 'NRP atau kata sandi salah');
    }

    public function logout(): RedirectResponse
    {
        foreach (['admin_sdm', 'police_pns', 'kawapolres', 'department_head'] as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
            }
        }
        return redirect(route('login'));
    }
}
