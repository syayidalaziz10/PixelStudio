<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="logo/logo-1.svg" type="image/icon type"> --}}
    @vite('resources/css/app.css')
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body class="font-poppins">

    {{-- header  --}}
    <header>
        <nav class="w-full py-2 z-50 top-0 bg-neutral">
            <div class="flex flex-wrap items-center justify-between px-40 py-5">
                <ul class="flex items-center p-2 mt-0 space-x-8 text-md border-0">
                    <li>
                        <a href="/"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="35" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/></defs><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#373737" y="-37.499999" height="449.999989" fill-opacity="1"/><g fill="#ffffff" fill-opacity="1"><g transform="translate(101.619447, 335.500942)"><g><path d="M 110.953125 -237.046875 C 123.054688 -249.828125 138.269531 -260.585938 156.59375 -269.328125 C 174.925781 -278.066406 194.679688 -282.4375 215.859375 -282.4375 C 237.046875 -282.4375 255.875 -277.894531 272.34375 -268.8125 C 288.820312 -259.738281 301.597656 -246.796875 310.671875 -229.984375 C 319.753906 -213.171875 324.296875 -193.503906 324.296875 -170.984375 C 324.296875 -161.222656 323.289062 -150.96875 321.28125 -140.21875 C 316.238281 -112.300781 306.066406 -87.332031 290.765625 -65.3125 C 275.460938 -43.289062 256.800781 -26.140625 234.78125 -13.859375 C 212.757812 -1.585938 189.644531 4.546875 165.4375 4.546875 C 144.25 4.546875 126.171875 0.257812 111.203125 -8.3125 C 96.242188 -16.894531 84.5625 -27.570312 76.15625 -40.34375 L 45.890625 132.140625 L -11.59375 132.140625 L 60.515625 -277.90625 L 118.015625 -277.90625 Z M 262.765625 -140.21875 C 264.109375 -146.601562 264.78125 -153.492188 264.78125 -160.890625 C 264.78125 -183.421875 258.140625 -200.988281 244.859375 -213.59375 C 231.578125 -226.207031 214.851562 -232.515625 194.6875 -232.515625 C 180.226562 -232.515625 165.851562 -228.8125 151.5625 -221.40625 C 137.269531 -214.007812 124.910156 -203.25 114.484375 -189.125 C 104.066406 -175.007812 97.175781 -158.367188 93.8125 -139.203125 C 92.46875 -132.816406 91.796875 -125.925781 91.796875 -118.53125 C 91.796875 -96 98.4375 -78.175781 111.71875 -65.0625 C 125 -51.945312 141.554688 -45.390625 161.390625 -45.390625 C 176.191406 -45.390625 190.734375 -49.171875 205.015625 -56.734375 C 219.304688 -64.304688 231.664062 -75.320312 242.09375 -89.78125 C 252.519531 -104.238281 259.410156 -121.050781 262.765625 -140.21875 Z M 262.765625 -140.21875 "/></g></g></g></svg></a>
                    </li>
                    <li><a href="/" class="py-2 pl-3 pr-4 hover:border-b-4 hover:border-secondary">Home</a></li>
                    <li><a href="#studio" class="py-2 pl-3 pr-4 hover:border-b-4 hover:border-secondary">Studio</a></li>
                    <li><a href="#galeri" class="py-2 pl-3 pr-4 hover:border-b-4 hover:border-secondary">Galeri</a></li>
                    <li><a href="#layanan" class="py-2 pl-3 pr-4 hover:border-b-4 hover:border-secondary">Layanan</a></li>
                    <li><a href="#about" class="py-2 pl-3 pr-4 hover:border-b-4 hover:border-secondary">About</a></li>
                </ul>
                <div class="text-secondary">
                    @auth
                        <div>
                            {{-- <div class="inline-block relative"> --}}
                            <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" type="button" class="border-2 border-secondary text-secondary p-2 rounded inline-flex items-center hover:bg-secondary hover:text-neutral">
                                <span class="px-3.5 text-sm break-words">Hallo! {{ auth()->user()->username}}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </button>
                            {{-- </div> --}}
                        </div>
                    @else
                        <div class="space-x-1">
                            <a class="border-2 border-secondary text-secondary py-1 px-5 text-sm rounded hover:bg-secondary hover:text-neutral" href="/registrasi">Registrasi</a>
                            <a class="border-2 border-secondary text-secondary py-1 px-5 rounded text-sm hover:bg-secondary hover:text-neutral" href="/login">Login</a>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    {{-- end header --}}

    {{-- main menu --}}
    <main>
        @yield('container')
    </main>
    {{-- end main menu --}}

    {{-- footer --}}
    <footer class="bg-neutral text-secondary border-t border-secondary">
        <div class="flex justify-between py-10 px-44">
            <div class="flex">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="48" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/></defs><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#373737" y="-37.499999" height="449.999989" fill-opacity="1"/><g fill="#ffffff" fill-opacity="1"><g transform="translate(101.619447, 335.500942)"><g><path d="M 110.953125 -237.046875 C 123.054688 -249.828125 138.269531 -260.585938 156.59375 -269.328125 C 174.925781 -278.066406 194.679688 -282.4375 215.859375 -282.4375 C 237.046875 -282.4375 255.875 -277.894531 272.34375 -268.8125 C 288.820312 -259.738281 301.597656 -246.796875 310.671875 -229.984375 C 319.753906 -213.171875 324.296875 -193.503906 324.296875 -170.984375 C 324.296875 -161.222656 323.289062 -150.96875 321.28125 -140.21875 C 316.238281 -112.300781 306.066406 -87.332031 290.765625 -65.3125 C 275.460938 -43.289062 256.800781 -26.140625 234.78125 -13.859375 C 212.757812 -1.585938 189.644531 4.546875 165.4375 4.546875 C 144.25 4.546875 126.171875 0.257812 111.203125 -8.3125 C 96.242188 -16.894531 84.5625 -27.570312 76.15625 -40.34375 L 45.890625 132.140625 L -11.59375 132.140625 L 60.515625 -277.90625 L 118.015625 -277.90625 Z M 262.765625 -140.21875 C 264.109375 -146.601562 264.78125 -153.492188 264.78125 -160.890625 C 264.78125 -183.421875 258.140625 -200.988281 244.859375 -213.59375 C 231.578125 -226.207031 214.851562 -232.515625 194.6875 -232.515625 C 180.226562 -232.515625 165.851562 -228.8125 151.5625 -221.40625 C 137.269531 -214.007812 124.910156 -203.25 114.484375 -189.125 C 104.066406 -175.007812 97.175781 -158.367188 93.8125 -139.203125 C 92.46875 -132.816406 91.796875 -125.925781 91.796875 -118.53125 C 91.796875 -96 98.4375 -78.175781 111.71875 -65.0625 C 125 -51.945312 141.554688 -45.390625 161.390625 -45.390625 C 176.191406 -45.390625 190.734375 -49.171875 205.015625 -56.734375 C 219.304688 -64.304688 231.664062 -75.320312 242.09375 -89.78125 C 252.519531 -104.238281 259.410156 -121.050781 262.765625 -140.21875 Z M 262.765625 -140.21875 "/></g></g></g></svg>
                </div>
                <div class="mx-12">
                    <p>#1 Studio Foto Terbaik di Bangkalan</p>
                    <p>Kamal, Bangkalan, Jawa Timur<br>62257
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <p>© 2022 Pixel Studio. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}

    {{-- dropdown menu --}}
    <div id="dropdownInformation" class="hidden z-10 w-44 bg-secondary rounded divide-y divide-gray-100 shadow">
        @auth
            <div class="py-3 px-4 text-sm text-neutral">
                <div>{{ auth()->user()->username }}</div>
                <div class="font-medium truncate">{{ auth()->user()->email }}</div>
            </div>
            <ul class="py-1 text-sm text-neutral" aria-labelledby="dropdownInformationButton">
                <li>
                <a href="/riwayat" class="block py-2 px-4 hover:bg-neutral hover:text-secondary">Riwayat</a>
                </li>
                <li>
            </ul>
            <div class="py-1">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="block w-full text-left py-2 px-4 text-sm text-neutral hover:bg-neutral hover:text-secondary">Log Out</button>
                </form>
            </div>
        @endauth
    </div>
    {{-- end dropdown menu --}}

    {{-- script dropdown --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>