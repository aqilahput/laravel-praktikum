<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MajorController; // Sudah diganti dari MajorsController

// Halaman awal
Route::get('/', function (): View {
    return view('welcome');
});

// Redirect Routing
Route::redirect('/redirect', '/students');

// Auth Routes
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Routes yang dilindungi middleware 'auth'
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    // Students
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');


// Majors (resource controller)
Route::resource('majors', MajorController::class);
});
// F55123022_Aqilah Nur Aisyah Putri
