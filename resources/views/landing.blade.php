@extends('layouts.main')
@section('container')
    {{-- div main --}}
    <div id="home">
        {{-- div banner --}}
        <div class="h-screen w-full flex items-center">
            <div class="w-full h-3/5 bg-cover bg-center p-44" style="background-image: url(img/bg-banner.jpg)">
                <div class="text-right">
                    <h1 class="font-reguler tracking-wider text-neutral text-5xl leading-tight">Selamat Datang <br>di <span class="font-medium">Pixel Studio<span></h1>
                    <p class="text-neutral text-lg tracking-wide font-reguler">Senang bertemu dengan Anda, <br> abadikan momen terbaikmu di studio kami<br>Tunggu apalagi!</p>
                </div>
            </div>
        </div>
        {{-- end div banner --}}

        {{-- div studio --}}
        <div id="studio" class="px-44 mb-36">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h1 class="text-3xl mb-20">Studio</h1>
                </div>
                <div class="flex flex-nowrap justify-start items-center w-full overflow-x-auto p-4">
                    {{-- content studio --}}
                    @foreach ($studios as $studio)
                        <div class="w-60 h-96 shadow-lg mr-3.5">
                            <div class="w-full h-60 bg-cover bg-center" style="background-image: url({{ asset('storage/' .$studio->foto) }})"></div>
                            <div class="p-3">
                                <div class="mb-4">
                                    <h2 class="text-lg font-medium">{{ $studio->nama_studio }}</h2>
                                    <small>{{ $studio->ruangan_studio }}</small>
                                </div>
                                <div>
                                    <p class="text-sm truncate">{{ $studio->deskripsi_studio }}</p>
                                </div>
                                <div>
                                    <a href="home/studio/{{ $studio->id }}" class="text-sm text-blue-700">Booking Sekarang -></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- end content studio --}}
                </div>
            </div>
        </div>
        {{-- {{-- end div studio --}}

        {{-- div galeri --}}
        <div id="galeri" class="px-44">
            <div>
                <h1 class="text-3xl mb-10 text-center">Galeri</h1>
            </div>
            <div>
                <div class="flex justify-center items-center space-x-4 w-full">
                    <div class="w-1/2 h-96 bg-secondary bg-cover bg-center" style="background-image: url(/img/galeri-1.jpg)"></div>
                    <div class="w-1/2 h-96 bg-secondary bg-cover bg-center" style="background-image: url(/img/galeri-3.jpg)"></div>
                </div>
                <div class="w-full h-96 bg-secondary bg-cover bg-center my-4" style="background-image: url(/img/galeri-2.jpg)"></div>
                <div class="flex justify-center items-center space-x-4 w-full">
                    <div class="w-1/2 h-96 bg-secondary bg-cover bg-center" style="background-image: url(/img/galeri-4.jpg)"></div>
                    <div class="w-1/2 h-96 bg-secondary bg-cover bg-center" style="background-image: url(/img/galeri-5.jpg)"></div>
                </div>
            </div>
        </div>

        {{-- div pricelis --}}
        <div id="layanan" class="px-44 mb-36">
            <div class="flex flex-col justify-center items-center">
                <div>
                    <h1 class="text-3xl mb-20 mt-20">Layanan</h1>
                </div>
                <div class="flex flex-nowrap justify-start items-center w-full overflow-x-auto p-4">
                    {{-- content pricelist --}}
                    @foreach ($pakets as $paket)
                        <div class="w-64 h-96 shadow-lg mr-3.5 py-4 px-2">
                            <div class="p-3">
                                <div>
                                    <h2 class="text-xl text-center py-6">{{ $paket->nama_paket }}</h2>
                                </div>
                                <div>
                                    <p class="text-sm text-center">{{ $paket->detail_paket }}</p>
                                </div>
                                <div>
                                    <h1 class="text-center font-medium text-xl text-secondary mt-20">RP. {{ $paket->harga_paket }}</h1>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- end content pricelist --}}
                </div>
            </div>
        </div>
        {{-- {{-- end div pricelist --}}

    </div>
    {{-- end div main --}}

    {{-- div about --}}
    <div class="px-44 mb-40">
        <div class="flex justify-center items-center">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="460" zoomAndPan="magnify" viewBox="0 0 375 225" height="260" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="88921ce186"><path d="M 32.8125 44.492188 L 167.0625 44.492188 L 167.0625 178.742188 L 32.8125 178.742188 Z M 32.8125 44.492188 " clip-rule="nonzero"/></clipPath></defs><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-22.5" height="270" fill-opacity="1"/><g clip-path="url(#88921ce186)"><path fill="#373737" d="M 32.8125 44.492188 L 167.0625 44.492188 L 167.0625 178.742188 L 32.8125 178.742188 L 32.8125 44.492188 " fill-opacity="1" fill-rule="nonzero"/></g><g fill="#ffffff" fill-opacity="1"><g transform="translate(68.799093, 163.549315)"><g><path d="M 39.296875 -83.953125 C 43.578125 -88.472656 48.960938 -92.28125 55.453125 -95.375 C 61.941406 -98.46875 68.9375 -100.015625 76.4375 -100.015625 C 83.945312 -100.015625 90.617188 -98.40625 96.453125 -95.1875 C 102.285156 -91.976562 106.804688 -87.394531 110.015625 -81.4375 C 113.234375 -75.488281 114.84375 -68.523438 114.84375 -60.546875 C 114.84375 -57.097656 114.488281 -53.46875 113.78125 -49.65625 C 111.988281 -39.769531 108.382812 -30.925781 102.96875 -23.125 C 97.550781 -15.332031 90.941406 -9.257812 83.140625 -4.90625 C 75.335938 -0.5625 67.148438 1.609375 58.578125 1.609375 C 51.078125 1.609375 44.675781 0.09375 39.375 -2.9375 C 34.082031 -5.976562 29.945312 -9.757812 26.96875 -14.28125 L 16.25 46.796875 L -4.109375 46.796875 L 21.4375 -98.40625 L 41.796875 -98.40625 Z M 93.0625 -49.65625 C 93.53125 -51.914062 93.765625 -54.351562 93.765625 -56.96875 C 93.765625 -64.945312 91.410156 -71.171875 86.703125 -75.640625 C 82.003906 -80.109375 76.082031 -82.34375 68.9375 -82.34375 C 63.820312 -82.34375 58.734375 -81.03125 53.671875 -78.40625 C 48.609375 -75.789062 44.226562 -71.984375 40.53125 -66.984375 C 36.84375 -61.984375 34.40625 -56.085938 33.21875 -49.296875 C 32.738281 -47.035156 32.5 -44.59375 32.5 -41.96875 C 32.5 -33.988281 34.847656 -27.675781 39.546875 -23.03125 C 44.253906 -18.394531 50.125 -16.078125 57.15625 -16.078125 C 62.394531 -16.078125 67.546875 -17.414062 72.609375 -20.09375 C 77.671875 -22.769531 82.046875 -26.664062 85.734375 -31.78125 C 89.421875 -36.90625 91.863281 -42.863281 93.0625 -49.65625 Z M 93.0625 -49.65625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(184.292791, 99.089416)"><g><path d="M 6.5 -30.484375 C 5.488281 -30.484375 4.640625 -30.828125 3.953125 -31.515625 C 3.273438 -32.203125 2.9375 -33.050781 2.9375 -34.0625 C 2.9375 -35.0625 3.273438 -35.90625 3.953125 -36.59375 C 4.640625 -37.28125 5.488281 -37.625 6.5 -37.625 C 7.476562 -37.625 8.304688 -37.28125 8.984375 -36.59375 C 9.671875 -35.90625 10.015625 -35.0625 10.015625 -34.0625 C 10.015625 -33.050781 9.671875 -32.203125 8.984375 -31.515625 C 8.304688 -30.828125 7.476562 -30.484375 6.5 -30.484375 Z M 9.234375 -26.921875 L 9.234375 0 L 3.671875 0 L 3.671875 -26.921875 Z M 9.234375 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(197.19149, 99.089416)"><g><path d="M 15.1875 -13.625 L 23.890625 0 L 17.59375 0 L 11.78125 -9.140625 L 6.296875 0 L 0.484375 0 L 9.1875 -13.234375 L 0.484375 -26.921875 L 6.796875 -26.921875 L 12.609375 -17.78125 L 18.078125 -26.921875 L 23.890625 -26.921875 Z M 15.1875 -13.625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(221.571982, 99.089416)"><g><path d="M 28.34375 -14.125 C 28.34375 -13.113281 28.273438 -12.203125 28.140625 -11.390625 L 7.578125 -11.390625 C 7.734375 -9.234375 8.523438 -7.503906 9.953125 -6.203125 C 11.390625 -4.898438 13.15625 -4.25 15.25 -4.25 C 18.238281 -4.25 20.351562 -5.503906 21.59375 -8.015625 L 27.609375 -8.015625 C 26.796875 -5.535156 25.320312 -3.503906 23.1875 -1.921875 C 21.050781 -0.347656 18.40625 0.4375 15.25 0.4375 C 12.675781 0.4375 10.367188 -0.140625 8.328125 -1.296875 C 6.296875 -2.453125 4.703125 -4.078125 3.546875 -6.171875 C 2.390625 -8.273438 1.8125 -10.710938 1.8125 -13.484375 C 1.8125 -16.253906 2.367188 -18.6875 3.484375 -20.78125 C 4.609375 -22.882812 6.1875 -24.503906 8.21875 -25.640625 C 10.257812 -26.785156 12.601562 -27.359375 15.25 -27.359375 C 17.789062 -27.359375 20.050781 -26.800781 22.03125 -25.6875 C 24.019531 -24.582031 25.566406 -23.03125 26.671875 -21.03125 C 27.785156 -19.03125 28.34375 -16.726562 28.34375 -14.125 Z M 22.53125 -15.875 C 22.488281 -17.925781 21.75 -19.570312 20.3125 -20.8125 C 18.882812 -22.050781 17.113281 -22.671875 15 -22.671875 C 13.070312 -22.671875 11.425781 -22.054688 10.0625 -20.828125 C 8.695312 -19.609375 7.882812 -17.957031 7.625 -15.875 Z M 22.53125 -15.875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(251.717793, 99.089416)"><g><path d="M 9.234375 -36.15625 L 9.234375 0 L 3.671875 0 L 3.671875 -36.15625 Z M 9.234375 -36.15625 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(184.292791, 153.618938)"><g><path d="M 14.859375 0.34375 C 12.578125 0.34375 10.519531 -0.0507812 8.6875 -0.84375 C 6.863281 -1.644531 5.429688 -2.78125 4.390625 -4.25 C 3.347656 -5.71875 2.828125 -7.425781 2.828125 -9.375 L 8.796875 -9.375 C 8.921875 -7.914062 9.492188 -6.710938 10.515625 -5.765625 C 11.546875 -4.816406 12.992188 -4.34375 14.859375 -4.34375 C 16.773438 -4.34375 18.269531 -4.804688 19.34375 -5.734375 C 20.414062 -6.671875 20.953125 -7.867188 20.953125 -9.328125 C 20.953125 -10.472656 20.617188 -11.398438 19.953125 -12.109375 C 19.285156 -12.828125 18.457031 -13.378906 17.46875 -13.765625 C 16.476562 -14.160156 15.101562 -14.585938 13.34375 -15.046875 C 11.125 -15.628906 9.320312 -16.222656 7.9375 -16.828125 C 6.550781 -17.429688 5.367188 -18.367188 4.390625 -19.640625 C 3.421875 -20.910156 2.9375 -22.601562 2.9375 -24.71875 C 2.9375 -26.675781 3.421875 -28.382812 4.390625 -29.84375 C 5.367188 -31.3125 6.738281 -32.4375 8.5 -33.21875 C 10.257812 -34 12.296875 -34.390625 14.609375 -34.390625 C 17.898438 -34.390625 20.59375 -33.566406 22.6875 -31.921875 C 24.789062 -30.285156 25.957031 -28.03125 26.1875 -25.15625 L 20.03125 -25.15625 C 19.9375 -26.394531 19.347656 -27.453125 18.265625 -28.328125 C 17.191406 -29.210938 15.773438 -29.65625 14.015625 -29.65625 C 12.421875 -29.65625 11.117188 -29.25 10.109375 -28.4375 C 9.097656 -27.625 8.59375 -26.453125 8.59375 -24.921875 C 8.59375 -23.878906 8.910156 -23.019531 9.546875 -22.34375 C 10.179688 -21.675781 10.988281 -21.144531 11.96875 -20.75 C 12.945312 -20.363281 14.285156 -19.945312 15.984375 -19.5 C 18.222656 -18.875 20.050781 -18.25 21.46875 -17.625 C 22.882812 -17.007812 24.085938 -16.054688 25.078125 -14.765625 C 26.078125 -13.484375 26.578125 -11.769531 26.578125 -9.625 C 26.578125 -7.894531 26.113281 -6.265625 25.1875 -4.734375 C 24.257812 -3.203125 22.90625 -1.972656 21.125 -1.046875 C 19.351562 -0.117188 17.265625 0.34375 14.859375 0.34375 Z M 14.859375 0.34375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(213.803444, 153.618938)"><g><path d="M 10.15625 -22.375 L 10.15625 -7.46875 C 10.15625 -6.457031 10.390625 -5.734375 10.859375 -5.296875 C 11.335938 -4.859375 12.148438 -4.640625 13.296875 -4.640625 L 16.703125 -4.640625 L 16.703125 0 L 12.3125 0 C 9.800781 0 7.878906 -0.582031 6.546875 -1.75 C 5.210938 -2.925781 4.546875 -4.832031 4.546875 -7.46875 L 4.546875 -22.375 L 1.375 -22.375 L 1.375 -26.921875 L 4.546875 -26.921875 L 4.546875 -33.609375 L 10.15625 -33.609375 L 10.15625 -26.921875 L 16.703125 -26.921875 L 16.703125 -22.375 Z M 10.15625 -22.375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(231.978883, 153.618938)"><g><path d="M 28.046875 -26.921875 L 28.046875 0 L 22.46875 0 L 22.46875 -3.171875 C 21.59375 -2.066406 20.445312 -1.195312 19.03125 -0.5625 C 17.613281 0.0703125 16.109375 0.390625 14.515625 0.390625 C 12.390625 0.390625 10.488281 -0.046875 8.8125 -0.921875 C 7.132812 -1.804688 5.816406 -3.109375 4.859375 -4.828125 C 3.898438 -6.554688 3.421875 -8.644531 3.421875 -11.09375 L 3.421875 -26.921875 L 8.9375 -26.921875 L 8.9375 -11.921875 C 8.9375 -9.515625 9.539062 -7.664062 10.75 -6.375 C 11.957031 -5.09375 13.601562 -4.453125 15.6875 -4.453125 C 17.769531 -4.453125 19.421875 -5.09375 20.640625 -6.375 C 21.859375 -7.664062 22.46875 -9.515625 22.46875 -11.921875 L 22.46875 -26.921875 Z M 28.046875 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(263.688179, 153.618938)"><g><path d="M 1.8125 -13.578125 C 1.8125 -16.285156 2.367188 -18.679688 3.484375 -20.765625 C 4.609375 -22.847656 6.140625 -24.46875 8.078125 -25.625 C 10.023438 -26.78125 12.1875 -27.359375 14.5625 -27.359375 C 16.320312 -27.359375 18.054688 -26.972656 19.765625 -26.203125 C 21.472656 -25.441406 22.832031 -24.425781 23.84375 -23.15625 L 23.84375 -36.15625 L 29.46875 -36.15625 L 29.46875 0 L 23.84375 0 L 23.84375 -4.0625 C 22.925781 -2.75 21.660156 -1.671875 20.046875 -0.828125 C 18.441406 0.015625 16.597656 0.4375 14.515625 0.4375 C 12.171875 0.4375 10.023438 -0.15625 8.078125 -1.34375 C 6.140625 -2.53125 4.609375 -4.191406 3.484375 -6.328125 C 2.367188 -8.460938 1.8125 -10.878906 1.8125 -13.578125 Z M 23.84375 -13.484375 C 23.84375 -15.335938 23.457031 -16.945312 22.6875 -18.3125 C 21.925781 -19.6875 20.925781 -20.734375 19.6875 -21.453125 C 18.445312 -22.171875 17.113281 -22.53125 15.6875 -22.53125 C 14.25 -22.53125 12.910156 -22.175781 11.671875 -21.46875 C 10.441406 -20.769531 9.441406 -19.742188 8.671875 -18.390625 C 7.910156 -17.046875 7.53125 -15.441406 7.53125 -13.578125 C 7.53125 -11.722656 7.910156 -10.09375 8.671875 -8.6875 C 9.441406 -7.289062 10.453125 -6.222656 11.703125 -5.484375 C 12.953125 -4.753906 14.28125 -4.390625 15.6875 -4.390625 C 17.113281 -4.390625 18.445312 -4.75 19.6875 -5.46875 C 20.925781 -6.1875 21.925781 -7.238281 22.6875 -8.625 C 23.457031 -10.007812 23.84375 -11.628906 23.84375 -13.484375 Z M 23.84375 -13.484375 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(296.814369, 153.618938)"><g><path d="M 6.5 -30.484375 C 5.488281 -30.484375 4.640625 -30.828125 3.953125 -31.515625 C 3.273438 -32.203125 2.9375 -33.050781 2.9375 -34.0625 C 2.9375 -35.0625 3.273438 -35.90625 3.953125 -36.59375 C 4.640625 -37.28125 5.488281 -37.625 6.5 -37.625 C 7.476562 -37.625 8.304688 -37.28125 8.984375 -36.59375 C 9.671875 -35.90625 10.015625 -35.0625 10.015625 -34.0625 C 10.015625 -33.050781 9.671875 -32.203125 8.984375 -31.515625 C 8.304688 -30.828125 7.476562 -30.484375 6.5 -30.484375 Z M 9.234375 -26.921875 L 9.234375 0 L 3.671875 0 L 3.671875 -26.921875 Z M 9.234375 -26.921875 "/></g></g></g><g fill="#545454" fill-opacity="1"><g transform="translate(309.713068, 153.618938)"><g><path d="M 15.34375 0.4375 C 12.800781 0.4375 10.503906 -0.140625 8.453125 -1.296875 C 6.398438 -2.453125 4.785156 -4.078125 3.609375 -6.171875 C 2.441406 -8.273438 1.859375 -10.710938 1.859375 -13.484375 C 1.859375 -16.222656 2.457031 -18.648438 3.65625 -20.765625 C 4.863281 -22.878906 6.507812 -24.503906 8.59375 -25.640625 C 10.675781 -26.785156 13.007812 -27.359375 15.59375 -27.359375 C 18.164062 -27.359375 20.492188 -26.785156 22.578125 -25.640625 C 24.660156 -24.503906 26.300781 -22.878906 27.5 -20.765625 C 28.707031 -18.648438 29.3125 -16.222656 29.3125 -13.484375 C 29.3125 -10.742188 28.691406 -8.316406 27.453125 -6.203125 C 26.222656 -4.085938 24.539062 -2.453125 22.40625 -1.296875 C 20.269531 -0.140625 17.914062 0.4375 15.34375 0.4375 Z M 15.34375 -4.390625 C 16.769531 -4.390625 18.109375 -4.734375 19.359375 -5.421875 C 20.617188 -6.109375 21.640625 -7.132812 22.421875 -8.5 C 23.203125 -9.863281 23.59375 -11.523438 23.59375 -13.484375 C 23.59375 -15.441406 23.21875 -17.09375 22.46875 -18.4375 C 21.71875 -19.789062 20.722656 -20.8125 19.484375 -21.5 C 18.253906 -22.1875 16.921875 -22.53125 15.484375 -22.53125 C 14.054688 -22.53125 12.726562 -22.1875 11.5 -21.5 C 10.28125 -20.8125 9.3125 -19.789062 8.59375 -18.4375 C 7.882812 -17.09375 7.53125 -15.441406 7.53125 -13.484375 C 7.53125 -10.585938 8.269531 -8.347656 9.75 -6.765625 C 11.226562 -5.179688 13.09375 -4.390625 15.34375 -4.390625 Z M 15.34375 -4.390625 "/></g></g></g></svg>
            </div>
        </div>
        <div>
            <h1 class="text-center text-lg text-secondary">Studio Foto By Pixel Studio<br>#Jadikan foto sebagai kenangan terindahmu!</h1>
        </div>
    </div>
    {{-- end div about --}}
    
@endsection