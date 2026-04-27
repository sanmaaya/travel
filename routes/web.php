<?php

use App\Http\Controllers\TravelController;

Route::get('/', [TravelController::class, 'index'])->name('home');
Route::post('/recommend', [TravelController::class, 'recommend'])->name('recommend');
