<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{

    public function riwayat()
    {
        return view('customer.riwayat', [
            'title' => 'Pixel Studio | Riwayat'
        ]);
    }

    public function profil()
    {
        return view('customer.profil', [
            'title' => 'Pixel Studio | Profil'
        ]);
    }
}
