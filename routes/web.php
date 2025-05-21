<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/accomodation', [HomeController::class, 'accomodation'])->name('accomodation');
Route::get('/destination', [HomeController::class, 'destination'])->name('destination');
Route::get('/lifestyle/{type}', [HomeController::class, 'lifestyle'])->name('lifestyle');
Route::get('/popular-vacation', [HomeController::class, 'popular_vacation'])->name('popular_vacation');
Route::get('/popular-activity', [HomeController::class, 'popular_activity'])->name('popular_activity');
Route::get('/details/{type}', [HomeController::class, 'details'])->name('details');
Route::get('/destination-details/{id}', [HomeController::class, 'destinationDetails'])->name('deti.details');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
