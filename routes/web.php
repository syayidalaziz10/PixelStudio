<?php


use App\Http\Middleware\Admin;
use App\Http\Middleware\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        'title' => "Pixel Studio | Home"
    ]);
});
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
    Route::get('/home', [LoginController::class, 'home'])->name('home');
});

Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

//route guest
Route::middleware(['guest'])->group(function () {
    Route::get('/registrasi', [RegisterController::class, 'create'])->name('registrasi');
    Route::post('/registrasi', [RegisterController::class, 'store'])->name('registrasi');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::get('/home', [LoginController::class, 'home'])->name('home');
});

Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/logout', [LoginController::class, 'logout']);
// Route::post('/logout', [AdminController::class, 'logout']);
