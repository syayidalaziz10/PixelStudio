<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('login.cusRegistrasi', [
            'title' => 'Daftar | Pixel Studio'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'nama' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'alamat' => 'required|max:255',
            'password' => 'min:5|required|confirmed',
            // 'password_confirmation' => 'min:5|required',

        ]);
        $data['password'] = bcrypt($data['password']);
        $data['level'] = 'Customer';
        User::create($data);
        return redirect('/login');
    }
}
