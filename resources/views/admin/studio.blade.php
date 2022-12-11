@extends('layouts.dash')
@section('container')
        {{-- main admin --}}
        <div class="p-10 bg-primary h-screen overflow-auto w-screen">
            <div class="flex justify-between items-center p-4 bg-neutral rounded-lg mb-2">
                <h1 class="text-xl font-semibold">
                    DASHBOARD STUDIO
                </h1>
                <button class="bg-secondary text-neutral text-xs py-2 px-4 rounded-md" data-modal-toggle="defaultModal">Tambah Studio</button>
                {{-- modal tambah user --}}
                <div id="defaultModal" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-lg h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative rounded-md shadow bg-primary">
                            <!-- Modal header -->
                            <div class="p-6">
                                <div class="flex justify-between items-start p-4 rounded-xl">
                                    <h3 class="text-xl font-bold text-secondary">
                                        TAMBAH STUDIO
                                    </h3>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-4">
                                    {{-- form modal --}}
                                    <form action="/dashboard/studio" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div>
                                            <label for="namastudio" class="block text-secondary text-sm mb-2">Nama Studio</label>
                                            <input type="text" id="namastudio" name="nama_studio" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                            
                                        </div>
                                        <div>
                                            <label for="ruangan" class="block text-secondary text-sm mb-2">Ruangan</label>
                                            <input type="text" id="ruangan" name="ruangan_studio"class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                        </div>
                                        <div>
                                            <label for="deskripsi" class="block text-secondary text-sm mb-2">Deskripsi</label>
                                            <textarea id="deskripsi" name="deskripsi_studio" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary"></textarea>
                                        </div>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-52 rounded-lg cursor-pointer bg-neutral">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik untuk upload</span> atau tarik dan lepas</p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or JPEG (MAX. 10MB)</p>
                                                </div>
                                                <input id="dropzone-file" name="foto" type="file" class="hidden">
                                            </label>
                                        </div> 
                                </div>
                            </div>
                            <div>
                                <!-- Modal footer -->
                                    <div class="flex items-center justify-end w-full px-12 py-6 space-x-2">
                                        <button data-modal-toggle="defaultModal" type="submit" class="text-xs text-center py-2 px-6 bg-zinc-800 text-white rounded-md">Tambah Studio</button>
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
                                Nama Studio
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Gambar
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Ruangan
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Deskripsi
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- kolom data studio --}}
                        @foreach ($studio as $studio)
                            <tr class="bg-neutral border-b">
                                <th scope="row" class="py-4 px-6 font-medium text-secondary">
                                    {{ $studio->nama_studio }}
                                </th>
                                <td class="py-4 px-6">
                                    <div class="w-64 h-32 bg-cover bg-center" style="background-image: url({{ asset('storage/' .$studio->foto) }})"></div>
                                </td>
                                <td class="py-4 px-6">
                                    {{ $studio->ruangan_studio }}
                                </td>
                                <td class="w-96 py-4 px-6 text-justify">
                                    {{ $studio->deskripsi_studio }}
                                </td>
                                <td class="py-2 px-6">
                                    <button data-modal-toggle="defaultModalEdit{{ $studio->id }}" class="font-medium text-blue-600 hover:underline">Edit</button>
                                    <form action="/dashboard/studio/hapus/{{ $studio->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="font-medium text-red-600 hover:underline" onclick="return confirm('Yakin Hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            {{-- modal edit user --}}
                            <div id="defaultModalEdit{{ $studio->id }}" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                                <div class="relative w-full max-w-lg h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative rounded-md shadow bg-primary">
                                        <!-- Modal header -->
                                        <div class="p-6">
                                            <div class="flex justify-between items-start p-4 rounded-xl">
                                                <h3 class="text-xl font-bold text-secondary">
                                                    EDIT STUDIO
                                                </h3>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-4">
                                                {{-- form modal --}}
                                                <form action="{{ Route('update.studio',$studio->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div>
                                                        <label for="namastudio" class="block text-secondary text-sm mb-2">Nama Studio</label>
                                                        <input type="text" id="namastudio" name="nama_studio" value="{{ $studio->nama_studio }}" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                                        
                                                    </div>
                                                    <div>
                                                        <label for="ruangan" class="block text-secondary text-sm mb-2">Ruangan</label>
                                                        <input type="text" id="ruangan" name="ruangan_studio" value="{{ $studio->ruangan_studio }}" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">
                                                    </div>
                                                    <div>
                                                        <label for="deskripsi" class="block text-secondary text-sm mb-2">Deskripsi</label>
                                                        <textarea id="deskripsi" name="deskripsi_studio" class="w-full bg-neutral py-1.5 px-2 text-sm rounded-md text-secondary">{{ $studio->deskripsi_studio }}</textarea>
                                                    </div>
                                                    <div class="flex items-center justify-center w-full">
                                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-52 rounded-lg cursor-pointer bg-neutral">
                                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Klik untuk upload</span> atau tarik dan lepas</p>
                                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or JPEG (MAX. 10MB)</p>
                                                            </div>
                                                            <input type="hidden" name="fotoLama" value="{{ $studio->foto }}">
                                                            <input id="dropzone-file" name="foto" type="file" class="hidden">
                                                        </label>
                                                    </div> 
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Modal footer -->
                                                <div class="flex items-center justify-end w-full px-12 py-6 space-x-2">
                                                    <button data-modal-toggle="defaultModal" type="submit" class="text-xs text-center py-2 px-6 bg-zinc-800 text-white rounded-md">Edit Studio</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end modal edit user --}}
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
