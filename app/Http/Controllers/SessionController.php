<?php

namespace App\Http\Controllers;

use App\Models\User; // default model Laravel
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('sesi/index'); // pakai titik lebih direkomendasikan
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email' => 'Email wajib diisi',
                'password' => 'Password wajib diisi',
            ]
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            // ✅ sukses login
            return redirect()->route('departemen.index')->with('success', 'Berhasil Login');
            // kalau mau langsung ke dashboard ganti jadi:
            // return redirect()->route('dashboard')->with('success','Berhasil Login');
        } else {
            // ❌ gagal login
            return redirect()->route('login')->with('error', 'Username atau Password Salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
