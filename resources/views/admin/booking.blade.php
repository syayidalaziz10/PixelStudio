@extends('layouts.dash')
@section('container')
        {{-- main admin --}}
        <div class="p-10 bg-primary h-screen overflow-auto w-screen">
            <div class="flex justify-between items-center p-4 bg-neutral rounded-lg mb-2">
                <h1 class="text-xl font-semibold">
                    DASHBOARD BOOKING
                </h1>
            </div>
            <div class="relative rounded-xl">
                <table class="w-full text-sm text-left text-secondary">
                    <thead class="text-xs text-secondary uppercase bg-neutral">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                TANGGAL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NAMA PENGGUNA
                            </th>
                            <th scope="col" class="py-3 px-6">
                                JAM 
                            </th>
                            <th scope="col" class="py-3 px-6">
                                STUDIO
                            </th>
                            <th scope="col" class="py-3 px-6">
                                PAKET
                            </th>
                            <th scope="col" class="py-3 px-6">
                                TOTAL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                KETERANGAN
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- kolom data studio --}}
                        @foreach ($bookings as $booking)
                            <tr class="bg-neutral border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-secondary">
                                    {{ $booking->tanggal }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $booking->user->username }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $booking->jam }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $booking->studio->nama_studio }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $booking->paket->nama_paket }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $booking->paket->harga_paket }}
                                </td>
                                <td class="w-56 py-4 px-6 text-justify">
                                    {{ $booking->pesan }}
                                </td>
                            </tr>
                        @endforeach
                        {{-- end kolom studio --}}
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end main admin  --}}
@endsection
