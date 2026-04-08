<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UseController;
use App\Http\Controllers\BladeController;

Route::get('/post/all', function(){
   
});
Route::get('/blade/task1', [App\Http\Controllers\BladeController::class, 'task1']);

?>
