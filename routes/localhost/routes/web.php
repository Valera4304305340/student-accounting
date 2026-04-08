<?php

use Illuminate\Support\Facades\Route;



Route::get('/blade', function() {
    return view('index');
});

Route::get('/blade/task1', [App\Http\Controllers\BladeController::class, 'task1']);