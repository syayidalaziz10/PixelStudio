<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        // return view('home', [
        //     'title' => 'Pixel Studio | Home'
        // ]);
    }

    public function create()
    {
        return view('login.login', [
            'title' => 'Login | Pixel Studio'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->level == 'Customer') {
                $request->session()->regenerate();
                return redirect()->intended('/home');
            }
            if (auth()->user()->level == 'Admin') {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard/studio');
            }
        }

        return back()->with('messageError', 'Login Gagal! Ulangi Lagi!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
