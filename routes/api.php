<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/users', [AdminController::class, 'index']);
    Route::get('/users/reported', [AdminController::class, 'indexReported']);
    
});
