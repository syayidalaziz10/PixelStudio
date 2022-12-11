@extends('layouts.main')
@section('container')
    <div class="px-44 min-h-screen">
        <div class="flex w-full h-full space-x-12 pb-10">
            <div class="w-full h-96 bg-center bg-cover" style="background-image: url({{ asset('storage/' .$studio->foto) }})"></div>
        </div>
        <div class="flex justify-start items-center flex-wrap">
            @foreach ($bookings as $booking)
                <div class="w-56 h-28 p-4 rounded-md border border-slate-300 mr-5 mb-5">
                    <div>
                        <h1 class="text-secondary font-medium text-lg">{{ $booking->tanggal }}</h1>
                        <p class="text-secondary text-sm">{{ $booking->paket->nama_paket }}</p>
                        <p class="text-secondary text-sm">{{ $booking->jam }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection