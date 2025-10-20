<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;


Route::get('/', [UserFormController::class, 'index'])->name('index');
Route::post('store', [UserFormController::class, 'store'])->name('store');

