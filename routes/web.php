<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function (Request $request) {
    return Inertia::render('Dashboard', [ 
        'Name' => $request->user()->name,
        'Email' => $request->user()->email
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('registros', function (Request $request) {
    return Inertia::render('Registros', [ 
        'Name' => $request->user()->name,
        'Email' => $request->user()->email
    ]);
})->middleware(['auth', 'verified'])->name('registros');

require __DIR__.'/settings.php';
