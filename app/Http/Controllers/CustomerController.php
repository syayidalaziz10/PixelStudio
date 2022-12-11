<?php

namespace App\Http\Controllers;

use index;
use App\Models\Paket;
use App\Models\Studio;
use App\Models\Booking;
use Illuminate\Http\Request;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function index()
    {
        $studios = DB::table('studios')->get();
        $pakets = DB::table('pakets')->get();
        return view('home', [
            'title' => 'Home | Pixel Studio',
            'studios' => $studios,
            'pakets' => $pakets
        ]);
    }

    public function landing()
    {
        $studios = DB::table('studios')->get();
        $pakets = DB::table('pakets')->get();
        return view('landing', [
            'title' => 'Welcome | Pixel Studio',
            'studios' => $studios,
            'pakets' => $pakets
        ]);
    }

    public function riwayat()
    {
        return View('customer.riwayat', [
            'title' => 'Riwayat | Pixel Studio',
            'bookings' => Booking::getRiwayat(Auth::user()->id),
        ]);
    }

    public function booking($id, Request $request)
    {
        return view('customer.booking', [
            'title' => 'Home | Pixel Studio',
            'url' => $request->url(),
            'studio' => Studio::findOrFail($id),
            'pakets' => Paket::all(),
        ]);
    }

    public function jadwal(Studio $studio)
    {
        return view('customer.jadwal', [
            'title' => 'Jadwal | Pixel Studio',
            'studio' => Studio::findOrFail($studio->id),
            'bookings' => Booking::getJadwal($studio->id)

        ]);
    }

    public function store(Request $request, $id)
    {
        $booking = new Booking;
        $booking->tanggal = $request->tanggal;
        $booking->jam = $request->jam;
        $booking->paket_id = $request->paket;
        $booking->pesan = $request->pesan;
        $booking->studio_id = $id;
        $booking->user_id = Auth::user()->id;
        $booking->save();
        return redirect('/riwayat');
        // Booking::create($booking);
        // dd($booking);
        // $data = $request->validate([
        //     'tanggal' => 'required',
        //     'jam' => 'required',
        //     'paket' => 'required',
        //     'pesan' => 'required',
        //     'cek' => 'accepted',

        // ]);
        // // $data = $request->paket;
        // $data = Auth::user()->id;
        // Booking::create($data);
        // return redirect('/home');
    }
}
