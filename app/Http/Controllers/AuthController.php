<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Account',
        ];
        return view('auth.index', $data);

    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect("/admin/dashboard");
        } else {
            return back()->with("loginError", "Gagal login, username atau password tidak ditemukan");
        }

    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect("/login");
    }
}
