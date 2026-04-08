<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get("/Vasia", function(){
return "petya";
});

Route::get('/post/page/{page?}', function ($page=1){
return 'страница номер'.$page;
});

Route::get('/posts/page/{page?}', function ($page){
return 'страница номер'.$page;
});

Route::get('/post/{slug}/{id}', function ($slug,$id){
    return 'пост'.$slug.''.$id;
}); 
Route::get('/post/{slug}/{id}', function ($slug, $id){
    return 'пост'.$slug.''.$id;
})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');

Route::get('/post/{id}', function ($id){
    return 'id';
});
Route::get('/post/all', function(){
    return 'all';
});
Route::get('/post/{id}', function ($id){
    return 'id';
})->where('id', '[0-9]+');
Route::get('/post/all', function(){
    return 'all';
});