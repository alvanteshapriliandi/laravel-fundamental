<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return "Hallo, Dunia!";
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/students', [DashboardController::class, 'students']);
Route::get('/courses', [DashboardController::class, 'courses']);

Route::get('/user/{nama}', function ($nama) {
    return "Halo " . $nama;
});

Route::get('/product/{id}/{name}', function ($id, $name) {
    return "Product $id: $name";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
