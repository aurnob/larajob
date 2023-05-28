<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Admin/Dashboard');
    })->name('admin.dashboard');
});
