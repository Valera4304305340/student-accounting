<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Задача 28.2: Получить пользователя с профилем
    public function getUserWithProfile($id)
    {
        // with('profile') - жадная загрузка профиля
        $user = User::with('profile')->find($id);
        
        dd($user->toArray()); // Выводим для проверки
    }
    // Задача 28.11: Получить все страны с городами
public function getAllCountriesWithCities()
{
    $countries = Country::with('cities')->get();
    
    return view('countries.index', compact('countries'));
}
// Задача 28.14: Получить продукты с категориями
public function getAllProductsWithCategories()
{
    $products = Product::with('categories')->get();
    
    return view('products.index', compact('products'));
}
}