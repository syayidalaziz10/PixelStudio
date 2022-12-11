@extends('layouts.dash')
@section('container')
        {{-- main admin --}}
        <div class="p-10 bg-primary h-screen overflow-auto w-screen">
            <div class="flex justify-between items-center p-4 bg-neutral rounded-lg mb-2">
                <h1 class="text-xl font-semibold">
                    DASHBOARD PENGGUNA
                </h1>
                <button class="bg-secondary text-neutral text-xs py-2 px-4 rounded-md" data-modal-toggle="defaultModal">Tambah Admin</button>
                {{-- modal tambah user --}}
                <div id="defaultModal" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-sm h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative rounded-md shadow bg-primary">
                            <!-- Modal header -->
                            <div class="p-6">
                                <div class="flex justify-between items-start p-4 rounded-xl">
                                    <h3 class="text-xl font-bold text-secondary">
                                        TAMBAH ADMIN
                                    </h3>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-4">
                                    {{-- form modal --}}
                                    <form action="/dashboard/pengguna" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                                            <input type="text" id="username" name="username" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                            
                                        </div>
                                        <div>
                                            <label for="nama" class="block text-secondary text-sm mb-2">Nama</label>
                                            <input type="text" id="nama" name="nama" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="email" class="block text-secondary text-sm mb-2">Email</label>
                                            <input type="text" id="email" name="email" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="alamat" class="block text-secondary text-sm mb-2">Alamat</label>
                                            <input type="text" id="alamat" name="alamat" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="password" class="block text-secondary text-sm mb-2">Password</label>
                                            <input type="password" id="password" name="password" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="password_confirmation" class="block text-secondary text-sm mb-2">Konfirmasi Password</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                </div>
                            </div>
                            <div>
                                <!-- Modal footer -->
                                    <div class="flex items-center justify-end w-full px-12 py-6 space-x-2">
                                        <button data-modal-toggle="defaultModal" type="submit" class="text-xs text-center py-2 px-6 bg-zinc-800 text-white rounded-md">Tambah Admin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal tambah user --}}
            </div>
            <div class="relative rounded-xl">
                <table class="w-full text-sm text-left text-secondary">
                    <thead class="text-xs text-secondary uppercase bg-neutral">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                USERNAME
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NAMA
                            </th>
                            <th scope="col" class="py-3 px-6">
                                EMAIL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                NO. HANDPHONE
                            </th>
                            <th scope="col" class="py-3 px-6">
                                LEVEL
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ACTION
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- kolom data studio --}}
                        @foreach ($users as $user)
                            <tr class="bg-neutral border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-secondary">
                                    {{ $user->username }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $user->nama }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->email }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->alamat }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $user->level }}
                                </td>
                                <td class="py-2 px-6">
                                    <form action="/dashboard/pengguna/hapus/{{ $user->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="font-medium text-red-600 hover:underline" onclick="return confirm('Yakin Hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        {{-- end kolom studio --}}
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end main admin  --}}
    
    {{-- script modal --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    {{-- end script modal --}}
@endsection
