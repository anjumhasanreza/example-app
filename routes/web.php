<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Form Submission Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Authentication Routes
Auth::routes();

// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/home')->with('success', 'You have been logged out.');
})->name('logout');

// Admin Routes (Only for 'admin' role)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/contacts', [AdminController::class, 'index'])->name('admin.contacts');
});
