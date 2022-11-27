@extends('layouts.main')
@section('container')
    <div>
        <div class="flex items-center h-screen justify-around flex-col">
            <div></div>
            <div class="w-full h-3/5 bg-cover max-w-full bg-center" style="background-image: url(img/bg-home.jpg)">
                <div class="my-40 mx-48">
                    <h1 class="text-right font-reguler tracking-wider text-neutral text-5xl leading-tight">Selamat Datang <br>di <span class="font-medium">Pixel Studio<span></h1>
                    <p class="text-neutral text-lg tracking-wide font-reguler text-right">Senang bertemu dengan Anda, <br> abadikan momen terbaikmu di studio kami<br>Tunggu apalagi!</p>
                </div>
            </div>
            <div>
                {{-- <h1 class="font-reguler text-3xl">Studio</h1> --}}
            </div>
        </div>
    </div>
@endsection