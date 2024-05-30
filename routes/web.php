<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\CourseController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get("/", [ActivityController::class, 'index'])->name('palestra.activities');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/palestra/about/{activity}', [ActivityController::class, 'show'])->name('palestra.about');
Route::get("/reservation", [CourseController::class, 'index'])->name('palestra.reservation');




});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

