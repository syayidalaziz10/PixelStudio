@extends('layouts.main')
@section('container')
<div class="min-h-screen px-80 mb-20">
    <div class="mb-6">
        <h1>Riwayat Booking</h1>
    </div>
    <div class="space-y-4">
        @foreach ($bookings as $booking)
            <div class="py-4 px-6 rounded-lg border border-slate-300">
                <div class="flex items-center justify-between">
                    <div class="text-sm">{{ $booking->tanggal }}
                        <span> {{ $booking->jam }}</span>
                    </div>
                    <div>
                        <h1 class="font-medium">RP. {{ $booking->paket->harga_paket }}</h1>
                        <p class="text-sm">{{ $booking->paket->nama_paket }}</p>
                    </div>
                </div>
                <div>
                    <h1 class="mb-1 font-medium">{{ $booking->studio->nama_studio }}</h1>
                    <p class="text-sm">{{ $booking->pesan }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection