<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\CourseController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReservationController;



Route::get("/", [ActivityController::class, 'index'])->name('palestra.activities');



Route::middleware('auth', 'verified')->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/palestra/about/{activity}', [ActivityController::class, 'show'])->name('palestra.about');


Route::post('/palestra/reservation/index/{activity}', [ReservationController::class, 'index'])->name('palestra.reservation.index');
Route::get('/palestra/reservations', [ReservationController::class, 'show'])->name('palestra.reservation.show');
Route::delete('/palestra/reservation/index/{activity}', [ReservationController::class, 'destroy'])->name('palestra.reservation.delete');
Route::post('/palestra/reservation/approve/{activity}/{userId}', [ReservationController::class, 'approve'])->name('palestra.reservation.approve');
Route::delete('/palestra/reservation/decline/{activity}/{userId}', [ReservationController::class, 'decline'])->name('palestra.reservation.decline');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


