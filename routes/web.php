<?php


use App\Http\Middleware\Admin;
use App\Http\Middleware\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route sementara

// Route::get('/', function () {
//     return view('landing', [
//         'title' => "Welcome | Pixel Studio"
//     ]);
// });


// Route::get('/footer', function () {
//     return view('layouts.footer');
// });

// Route::get('/main', function () {
//     return view('layouts.main');
// });

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/registrasi', function () {
//     return view('login.cusRegistrasi');
// });




//grouping middleware
//route customer
Route::middleware(['auth', 'Customer'])->group(function () {
    Route::get('/profil', [CustomerController::class, 'profil'])->name('profil');
    Route::get('/riwayat', [CustomerController::class, 'riwayat'])->name('riwayat');
    Route::get('/home', [CustomerController::class, 'index'])->name('home');
    Route::get('home/studio/{studio:id}', [CustomerController::class, 'booking'])->name('cus.booking');
    Route::post('home/studio/{studio:id}', [CustomerController::class, 'store'])->name('cus.booking');
    Route::get('home/studio/jadwal/{studio:id}', [CustomerController::class, 'jadwal'])->name('cus.jadwal');
});

Route::middleware(['auth', 'Admin'])->group(function () {
    // route studio
    Route::get('/dashboard/studio', [StudioController::class, 'index'])->name('studio.index');
    Route::post('/dashboard/studio', [StudioController::class, 'store'])->name('studio.store');
    Route::delete('dashboard/studio/hapus/{studio:id}', [StudioController::class, 'destroy'])->name('studio.hapus');
    Route::post('/dashboard/studio/update/{studio:id}', [StudioController::class, 'update'])->name('update.studio');
    // route user
    Route::get('/dashboard/pengguna', [PenggunaController::class, 'index'])->name('pengguna.index');
    Route::post('/dashboard/pengguna', [PenggunaController::class, 'store'])->name('pengguna.store');
    Route::delete('dashboard/pengguna/hapus/{user:id}', [PenggunaController::class, 'destroy'])->name('pengguna.hapus');
    // route paket
    Route::get('/dashboard/paket', [PaketController::class, 'index'])->name('paket.index');
    Route::post('/dashboard/paket', [PaketController::class, 'store'])->name('paket.store');
    Route::delete('dashboard/paket/hapus/{paket:id}', [PaketController::class, 'destroy'])->name('paket.hapus');
    Route::post('/dashboard/paket/update/{paket:id}', [PaketController::class, 'update'])->name('update.paket');
    // route booking
    Route::get('/dashboard/booking', [BookingController::class, 'index'])->name('booking.index');
});

//route guest
Route::middleware(['guest'])->group(function () {
    Route::get('/registrasi', [RegisterController::class, 'create'])->name('registrasi');
    Route::post('/registrasi', [RegisterController::class, 'store'])->name('registrasi');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::get('/', [CustomerController::class, 'landing'])->name('landing');
});

Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/logout', [LoginController::class, 'logout']);
// Route::post('/logout', [AdminController::class, 'logout']);
