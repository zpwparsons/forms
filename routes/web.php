<?php

use App\Http\Controllers\FormKitController;
use App\Http\Controllers\VueFormController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::prefix('form-kit')->name('form-kit:')->group(function () {
    Route::get('/', [FormKitController::class, 'create'])->name('create');
});

Route::prefix('vue-form')->name('vue-form:')->group(function () {
    Route::get('/', [VueFormController::class, 'create'])->name('create');
});

