<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'Welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::get('/ofertas', function () {
    return response()->json([
        ['titulo' => 'Oferta 1'],
        ['titulo' => 'Oferta 2']
    ]);
});

require __DIR__.'/settings.php';
