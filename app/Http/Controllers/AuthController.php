<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('/dashboard');
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->intended('/dashboard');
            } elseif ($user->role === 'guru') {
                return redirect()->intended('/guru/dashboard');
            } elseif ($user->role === 'siswa') {
                return redirect()->intended('/siswa/dashboard');
            } else {
                Auth::logout();
                return redirect('/login')->with('loginError', 'Peran user tidak dikenali');
            }
        }
        return back()->with('loginError', 'loginGagal, Periksa kembali akun Anda!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
