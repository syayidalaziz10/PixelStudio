@extends('layouts.main')
@section('container')
    <div class="px-44 h-auto">
        <div class="flex w-full h-full space-x-12 pb-10">
            <div class="w-2/5 h-screen bg-center bg-cover" style="background-image: url({{ asset('storage/' .$studio->foto) }})"></div>
            <div class="max-w-2xl flex flex-col justify-between">
                <div>
                    <h1 class="text-2xl mb-5">{{ $studio->nama_studio }}   <span class="text-gray-500">{{ $studio->ruangan_studio }}</span></h1>
                    <p class="text-sm">{{ $studio->deskripsi_studio }}</p>
                </div>
                <form action="{{ $url }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <h2 class="text-xl mb-5">Booking Sekarang</h2>
                        <div class="flex space-x-10">
                            <div class="w-1/2 space-y-6 text-sm">
                                <div>
                                    <label for="tanggal" class="block">Pilih Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" class="w-full p-1 border border-slate-400">
                                </div>
                                <div>
                                    <label for="jam" class="block">Pilih Jam</label>
                                    <select name="jam" id="jam" class="w-full border p-1 border-secondary">
                                        <option value="09.00 - 10.00">09.00 - 10.00</option>
                                        <option value="10.00 - 11.00">10.00 - 11.00</option>
                                        <option value="11.00 - 12.00">11.00 - 12.00</option>
                                        <option value="12.00 - 13.00">12.00 - 13.00</option>
                                        <option value="13.00 - 14.00">13.00 - 14.00</option>
                                        <option value="14.00 - 15.00">14.00 - 15.00</option>
                                        <option value="16.00 - 17.00">16.00 - 17.00</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="paket" class="block">Pilih Paket</label>
                                    <select name="paket" id="paket" class="w-full p-1 border border-slate-400">
                                        @foreach($pakets as $paket)
                                            <option value="{{ $paket->id }}">{{ $paket->nama_paket }} - {{ $paket->harga_paket }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2 space-y-7 text-sm">
                                <div>
                                    <label for="" class="block">Pesan</label>
                                    <textarea name="pesan" id="" class="p-2 block w-full border border-slate-300"></textarea>
                                </div>
                                <div>
                                    <input type="checkbox" name="cek" id="">
                                    <label for="">Dengan ini saya menyetujui persyaratan dan peraturan pada Pixel Studio</label>
                                </div>
                                <div>
                                    <button type="submit" class="bg-secondary px-2 py-1 w-full text-white">Booking</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection