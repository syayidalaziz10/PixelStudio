@extends('layouts.dash')
@section('container')
        {{-- main admin --}}
        <div class="p-10 bg-primary h-screen overflow-auto w-screen">
            <div class="flex justify-between items-center p-4 bg-neutral rounded-lg mb-2">
                <h1 class="text-xl font-semibold">
                    DASHBOARD PAKET
                </h1>
                <button class="bg-secondary text-neutral text-xs py-2 px-4 rounded-md" data-modal-toggle="defaultModal">Tambah Paket</button>
                {{-- modal tambah paket --}}
                <div id="defaultModal" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-lg h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative rounded-md shadow bg-primary">
                            <!-- Modal header -->
                            <div class="p-6">
                                <div class="flex justify-between items-start p-4 rounded-xl">
                                    <h3 class="text-xl font-bold text-secondary">
                                        TAMBAH PAKET
                                    </h3>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-4">
                                    {{-- form modal --}}
                                    <form action="/dashboard/paket" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label for="namapaket" class="block text-secondary text-sm mb-2">Nama paket</label>
                                            <input type="text" id="namapaket" name="nama_paket" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="harga" class="block text-secondary text-sm mb-2">Harga</label>
                                            <input type="text" id="harga" name="harga_paket" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="detail" class="block text-secondary text-sm mb-2">detail</label>
                                            <textarea id="detail" name="detail_paket" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary"></textarea>
                                        </div> 
                                </div>
                            </div>
                            <div>
                                <!-- Modal footer -->
                                    <div class="flex items-center justify-end w-full px-12 py-6 space-x-2">
                                        <button data-modal-toggle="defaultModal" type="submit" class="text-xs text-center py-2 px-6 bg-zinc-800 text-white rounded-md">Tambah Paket</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal tambah paket --}}
            </div>
            <div class="relative rounded-xl">
                <table class="w-full text-sm text-left text-secondary">
                    <thead class="text-xs text-secondary uppercase bg-neutral">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Nama Paket
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Harga
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Detail
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- kolom data studio --}}
                        @foreach ($paket as $paket)
                            <tr class="bg-neutral border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-secondary">
                                    {{ $paket->nama_paket }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $paket->harga_paket }}
                                </td>
                                <td class="w-96 py-4 px-6 text-justify">
                                    {{ $paket->detail_paket }}
                                </td>
                                <td class="py-2 px-6">
                                    <button type="button" data-modal-toggle="defaultModalEdit{{ $paket->id }}" class="font-medium text-blue-600 hover:underline">Edit</button>
                                    <form action="/dashboard/paket/hapus/{{ $paket->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="font-medium text-red-600 hover:underline" onclick="return confirm('Yakin Hapus?')">Hapus</button>
                                    </form>
                                    {{-- modal edit user --}}
                                    <div id="defaultModalEdit{{ $paket->id }}" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                                        <div class="relative w-full max-w-lg h-full md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative rounded-md shadow bg-primary">
                                                <!-- Modal header -->
                                                <div class="p-6">
                                                    <div class="flex justify-between items-start p-4 rounded-xl">
                                                        <h3 class="text-xl font-bold text-secondary">
                                                            EDIT PAKET
                                                        </h3>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-4">
                                                        {{-- form modal --}}
                                                        <form action="{{ Route('update.paket',$paket->id) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div>
                                                                <label for="namapaket" class="block text-secondary text-sm mb-2">Nama paket</label>
                                                                <input type="text" id="namapaket" name="nama_paket" value="{{ $paket->nama_paket }}" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                                            </div>
                                                            <div>
                                                                <label for="harga" class="block text-secondary text-sm mb-2">Harga</label>
                                                                <input type="text" id="harga" name="harga_paket" value="{{ $paket->harga_paket }}" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                                            </div>
                                                            <div>
                                                                <label for="detail" class="block text-secondary text-sm mb-2">detail</label>
                                                                <textarea id="detail" name="detail_paket" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">{{ $paket->detail_paket}}</textarea>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <!-- Modal footer -->
                                                        <div class="flex items-center justify-end w-full px-12 py-6 space-x-2">
                                                            <button data-modal-toggle="defaultModal" type="submit" class="text-xs text-center py-2 px-6 bg-zinc-800 text-white rounded-md">Edit Paket</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end modal edit user --}}
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
