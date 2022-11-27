<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body class="font-poppins">
    <header>
        <nav class="p-2 w-full fixed backdrop-blur-sm z-50 top-0">
            <div class="flex flex-wrap items-center justify-between px-44 py-5">
                <a href="" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="35" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/></defs><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#373737" y="-37.499999" height="449.999989" fill-opacity="1"/><g fill="#ffffff" fill-opacity="1"><g transform="translate(101.619447, 335.500942)"><g><path d="M 110.953125 -237.046875 C 123.054688 -249.828125 138.269531 -260.585938 156.59375 -269.328125 C 174.925781 -278.066406 194.679688 -282.4375 215.859375 -282.4375 C 237.046875 -282.4375 255.875 -277.894531 272.34375 -268.8125 C 288.820312 -259.738281 301.597656 -246.796875 310.671875 -229.984375 C 319.753906 -213.171875 324.296875 -193.503906 324.296875 -170.984375 C 324.296875 -161.222656 323.289062 -150.96875 321.28125 -140.21875 C 316.238281 -112.300781 306.066406 -87.332031 290.765625 -65.3125 C 275.460938 -43.289062 256.800781 -26.140625 234.78125 -13.859375 C 212.757812 -1.585938 189.644531 4.546875 165.4375 4.546875 C 144.25 4.546875 126.171875 0.257812 111.203125 -8.3125 C 96.242188 -16.894531 84.5625 -27.570312 76.15625 -40.34375 L 45.890625 132.140625 L -11.59375 132.140625 L 60.515625 -277.90625 L 118.015625 -277.90625 Z M 262.765625 -140.21875 C 264.109375 -146.601562 264.78125 -153.492188 264.78125 -160.890625 C 264.78125 -183.421875 258.140625 -200.988281 244.859375 -213.59375 C 231.578125 -226.207031 214.851562 -232.515625 194.6875 -232.515625 C 180.226562 -232.515625 165.851562 -228.8125 151.5625 -221.40625 C 137.269531 -214.007812 124.910156 -203.25 114.484375 -189.125 C 104.066406 -175.007812 97.175781 -158.367188 93.8125 -139.203125 C 92.46875 -132.816406 91.796875 -125.925781 91.796875 -118.53125 C 91.796875 -96 98.4375 -78.175781 111.71875 -65.0625 C 125 -51.945312 141.554688 -45.390625 161.390625 -45.390625 C 176.191406 -45.390625 190.734375 -49.171875 205.015625 -56.734375 C 219.304688 -64.304688 231.664062 -75.320312 242.09375 -89.78125 C 252.519531 -104.238281 259.410156 -121.050781 262.765625 -140.21875 Z M 262.765625 -140.21875 "/></g></g></g></svg>
                </a>
                <div class="text-secondary">
                    <ul class="flex items-center p-2 mt-0 space-x-8 text-sm border-0">
                        <li><a href="/" class="py-2 pl-3 pr-4">Home</a></li>
                        <li><a href="" class="py-2 pl-3 pr-4 ">Studio</a></li>
                        <li><a href="" class="py-2 pl-3 pr-4 ">About</a></li>
                        <li><a href="" class="py-2 pl-3 pr-4 ">Galeri</a></li>
                        @auth
                            <div>
                                <div class="dropdown inline-block relative">
                                    <button class="border-2 border-secondary text-secondary p-2 rounded inline-flex items-center">
                                        <span class="mr-1 break-words">Hallo! {{ auth()->user()->username}}</span>
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                                    </button>
                                    <ul class="dropdown-menu absolute hidden text-secondary pt-1">
                                        <li class=""><a class="rounded-t bg-neutral hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/profil">Profil</a></li>
                                        <li class=""><a class="bg-neutral hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="/riwayat">Riwayat</a></li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <li class=""><button type="submit" class="rounded-b bg-neutral hover:bg-gray-400 py-2 pl-4 pr-6 block whitespace-no-wrap">Logout</button></li>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <li>
                                <a class="border-2 border-secondary text-secondary py-1 px-5 rounded" href="/login" class="py-2 pl-3 pr-4 font-semibold">Login</a>
                            </li>
                        @endauth
                </div>
            </div>
        </nav>
    </header>
    <main class="h-screen">
        @yield('container')
    </main>
    <footer class="bg-secondary text-neutral">
        <div class="flex justify-around py-10 px-auto">
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
                <ul class="flex items-center space-x-12">
                    <li><a href="/">Contact</a></li>
                    <li><a href="/">Studio</a></li>
                    <li><a href="/">About</a></li>
                    <li><a href="/">Galeri</a></li>
                </ul>
                <div class="mt-2">
                    <p class="text-md font-thin">© 2022 Pixel Studio. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>