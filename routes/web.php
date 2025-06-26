<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\Berita1Controller;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\PantauController;

// ==========================
// AUTH ROUTES
// ==========================
// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Register (gunakan salah satu dari 2 opsi berikut, jangan dua-duanya)
// Opsi 1: RegisterController Laravel default
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Opsi 2: Jika pakai custom AuthController (hapus ini jika tidak digunakan)
// Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);


// ==========================
// HOME
// ==========================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


// ==========================
// DASHBOARD (Setelah login)
// ==========================
Route::get('/dashboard', function () {
    return 'Selamat datang di Dashboard!';
})->middleware('auth');


// ==========================
// PAGES (Statik View Only)
// ==========================
Route::view('/pengaduan-form', 'pages.pengaduan'); // hindari tumpang tindih dengan controller
Route::view('/berita', 'pages.berita');
Route::view('/customer-service', 'pages.customer-service');
Route::view('/tentang', 'pages.tentang');


// ==========================
// CONTROLLER ROUTES
// ==========================
// Pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
//edit profil
Route::get('/edit', [EditController::class, 'index'])->name('edit.index');
Route::middleware(['auth'])->group(function () {
    Route::put('/profil/update', [EditController::class, 'update'])->name('profil.update');
    Route::get('/profil/edit', [EditController::class, 'index'])->name('profil.edit');
    Route::put('/profil/update', [EditController::class, 'update'])->name('profil.update');
});
// Berita (jika ada controller, tambahkan di sini)
Route::get('/berita', [Berita1Controller::class, 'index'])->name('berita.index');
// Customer Service (jika ada controller, tambahkan di sini)
Route::get(uri: '/customer', action: [CustomerServiceController::class, 'index'])->name('customer.index');
//pantau
Route::get('/pantau', [PantauController::class, 'index'])->name('pantau.index');
