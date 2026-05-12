<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', function() {
    return view('blade.index');
});

Route::get('/blade/task1', [BladeController::class, 'task1']);
Route::get('/blade/task36', [BladeController::class, 'task36']);
Route::get('/blade/task35', [BladeController::class, 'task35']);
Route::get('/blade/task34', [BladeController::class, 'task34']);
Route::get('/blade/task33', [BladeController::class, 'task33']);
Route::get('/blade/task32', [BladeController::class, 'task32']);
Route::get('/blade/task31', [BladeController::class, 'task31']);
Route::get('/blade/task30', [BladeController::class, 'task30']);
Route::get('/blade/task29', [BladeController::class, 'task29']);
Route::get('/blade/task28', [BladeController::class, 'task28']);
Route::get('/blade/task27', [BladeController::class, 'task27']);
Route::get('/blade/task26', [BladeController::class, 'task26']);
Route::get('/blade/task25', [BladeController::class, 'task25']);
Route::get('/blade/task24', [BladeController::class, 'task24']);
Route::get('/blade/task23', [BladeController::class, 'task23']);
Route::get('/blade/task22', [BladeController::class, 'task22']);
Route::get('/blade/task21', [BladeController::class, 'task21']);
Route::get('/blade/task20', [BladeController::class, 'task20']);
Route::get('/blade/task19', [BladeController::class, 'task19']);
Route::get('/blade/task18', [BladeController::class, 'task18']);
Route::get('/blade/task17', [BladeController::class, 'task17']);
Route::get('/blade/task16', [BladeController::class, 'task16']);
Route::get('/blade/task15', [BladeController::class, 'task15']);
Route::get('/blade/task14', [BladeController::class, 'task14']);
Route::get('/blade/task13', [BladeController::class, 'task13']);
Route::get('/blade/task12', [BladeController::class, 'task12']);
Route::get('/blade/task11', [BladeController::class, 'task11']);
Route::get('/blade/task10', [BladeController::class, 'task10']);
Route::get('/blade/task9', [BladeController::class, 'task9']);
Route::get('/blade/task8', [BladeController::class, 'task8']);
Route::get('/blade/task7', [BladeController::class, 'task7']);
Route::get('/blade/task6', [BladeController::class, 'task6']);
Route::get('/blade/task5', [BladeController::class, 'task5']);
Route::get('/blade/task4', [BladeController::class, 'task4']);
Route::get('/blade/task3', [BladeController::class, 'task3']);
Route::get('/blade/task2', [BladeController::class, 'task2']);
Route::get('/blade/task2', [BladeController::class, 'task2']);
Route::get('/blade/task3', [BladeController::class, 'task3']);
Route::get('/blade/task4', [BladeController::class, 'task4']);
Route::get('/blade/task5', [BladeController::class, 'task5']);
Route::get('/blade/task6', [BladeController::class, 'task6']);
Route::get('/blade/task7', [BladeController::class, 'task7']);
Route::get('/blade/task8', [BladeController::class, 'task8']);
Route::get('/blade/task9', [BladeController::class, 'task9']);
Route::get('/blade/task10', [BladeController::class, 'task10']);
Route::get('/blade/task11', [BladeController::class, 'task11']);
Route::get('/blade/task12', [BladeController::class, 'task12']);
Route::get('/blade/task13', [BladeController::class, 'task13']);
Route::get('/blade/task14', [BladeController::class, 'task14']);
Route::get('/blade/task15', [BladeController::class, 'task15']);
Route::get('/blade/task16', [BladeController::class, 'task16']);
Route::get('/blade/task17', [BladeController::class, 'task17']);
Route::get('/blade/task18', [BladeController::class, 'task18']);
Route::get('/blade/task19', [BladeController::class, 'task19']);
Route::get('/blade/task20', [BladeController::class, 'task20']);
Route::get('/blade/task21', [BladeController::class, 'task21']);
Route::get('/blade/task22', [BladeController::class, 'task22']);
Route::get('/blade/task23', [BladeController::class, 'task23']);
Route::get('/blade/task24', [BladeController::class, 'task24']);
Route::get('/blade/task25', [BladeController::class, 'task25']);
Route::get('/blade/task26', [BladeController::class, 'task26']);
Route::get('/blade/task27', [BladeController::class, 'task27']);
Route::get('/blade/task28', [BladeController::class, 'task28']);
Route::get('/blade/task29', [BladeController::class, 'task29']);
Route::get('/blade/task30', [BladeController::class, 'task30']);
Route::get('/blade/task31', [BladeController::class, 'task31']);
Route::get('/blade/task32', [BladeController::class, 'task32']);
Route::get('/blade/task33', [BladeController::class, 'task33']);
Route::get('/blade/task34', [BladeController::class, 'task34']);
Route::get('/blade/task35', [BladeController::class, 'task35']);
Route::get('/blade/task36', [BladeController::class, 'task36']);

// ========== Маршруты для работы со статьями (Задачи 25.1-25.10) ==========
Route::get("/post/all", [App\Http\Controllers\PostController::class, "getAll"]);
Route::get("/post/all/{order}", [App\Http\Controllers\PostController::class, "getAll"])
    ->where("order", "id|title|date");
Route::get("/post/all/{order}/{dir}", [App\Http\Controllers\PostController::class, "getAll"])
    ->where("order", "id|title|date")
    ->where("dir", "asc|desc");

Route::get("/post/{id}", [App\Http\Controllers\PostController::class, "getOne"])
    ->where("id", "[0-9]+");

Route::get("/post/all", [App\Http\Controllers\PostController::class, "getAll"]);
Route::get("/post/all/{order}", [App\Http\Controllers\PostController::class, "getAll"])
    ->where("order", "id|title|date");
Route::get("/post/all/{order}/{dir}", [App\Http\Controllers\PostController::class, "getAll"])
    ->where("order", "id|title|date")
    ->where("dir", "asc|desc");
Route::get("/post/{id}", [App\Http\Controllers\PostController::class, "getOne"])
    ->where("id", "[0-9]+");
Route::get('/post/del/{id}', [PostController::class, 'delPost'])->where('id', '[0-9]+');
// Задача 27.1: Удаление статьи
Route::get('/post/del/{id}', [PostController::class, 'delPost'])->where('id', '[0-9]+');

// Задача 27.4: Список удаленных статей
Route::get('/post/deleted', [PostController::class, 'getDeletedPost']);

// Задача 27.5: Восстановление статьи
Route::get('/post/restore/{id}', [PostController::class, 'restorePost'])->where('id', '[0-9]+');

// Полное удаление (навсегда)
Route::get('/post/force-delete/{id}', [PostController::class, 'forceDeletePost'])->where('id', '[0-9]+');
Route::get('/countries', [UserController::class, 'getAllCountriesWithCities']);
Route::get('/users-countries', [UserController::class, 'getAllUsersWithCountries']);
// Задачи 28.1-28.16: Связи моделей
Route::get('/user/{id}', [UserController::class, 'getUserWithProfile']);
Route::get('/users', [UserController::class, 'getAllUsersWithProfiles']);
Route::get('/user-city/{id}', [UserController::class, 'getUserWithCity']);
Route::get('/users-cities', [UserController::class, 'getAllUsersWithCities']);
Route::get('/cities', [UserController::class, 'getAllCitiesWithCountries']);
Route::get('/users-full', [UserController::class, 'getAllUsersWithCitiesAndCountries']);
Route::get('/countries', [UserController::class, 'getAllCountriesWithCities']);
Route::get('/users-countries', [UserController::class, 'getAllUsersWithCountries']);
Route::get('/products', [UserController::class, 'getAllProductsWithCategories']);
Route::get('/categories', [UserController::class, 'getAllCategoriesWithProducts']);