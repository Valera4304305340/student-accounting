<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function task1()
    {
        $name = 'Иван абоба';
        $age = 25;
        $salary = 50000;
        return view('blade.tasks.task1', compact('name', 'age', 'salary'));
    }
    
    public function task2()
    {
        $cssClass = 'highlight';
        return view('blade.tasks.task2', compact('cssClass'));
    }
    
    public function task3()
    {
        $input1 = 'Значение 1';
        $input2 = 'Значение 2';
        $input3 = 'Значение 3';
        return view('blade.tasks.task3', compact('input1', 'input2', 'input3'));
    }
    
    public function task4()
    {
        $redColor = 'color: red;';
        return view('blade.tasks.task4', compact('redColor'));
    }
    
    public function task5()
    {
        $text = 'Перейти на Google';
        $href = 'https://google.com';
        return view('blade.tasks.task5', compact('text', 'href'));
    }
    
    public function task6()
    {
        return view('blade.tasks.task6');
    }
    
    public function task7()
    {
        $employee = ['name' => 'Анна Сидорова', 'age' => 30, 'salary' => 75000];
        return view('blade.tasks.task7', compact('employee'));
    }
    
    public function task8()
    {
        $arr = [10, 20, 30, 40, 50];
        return view('blade.tasks.task8', compact('arr'));
    }
    
    public function task9()
    {
        $city = 'Санкт-Петербург';
        return view('blade.tasks.task9', compact('city'));
    }
    
    public function task10()
    {
        $location = ['country' => 'Франция'];
        return view('blade.tasks.task10', compact('location'));
    }
    
    public function task11()
    {
        $year = 2025;
        return view('blade.tasks.task11', compact('year'));
    }
    
    public function task12()
    {
        $str = '<b>Жирный текст</b>';
        return view('blade.tasks.task12', compact('str'));
    }
    
    public function task13()
    {
        return view('blade.tasks.task13');
    }
    
    public function task14()
    {
        $age = 20;
        return view('blade.tasks.task14', compact('age'));
    }
    
    public function task15()
    {
        $age = 17;
        return view('blade.tasks.task15', compact('age'));
    }
    
    public function task16()
    {
        $age = 18;
        return view('blade.tasks.task16', compact('age'));
    }
    
    public function task17()
    {
        $age = 16;
        return view('blade.tasks.task17', compact('age'));
    }
    
    public function task18()
    {
        $arr = [10, 20, 30];
        return view('blade.tasks.task18', compact('arr'));
    }
    
    public function task19()
    {
        $arr = [10, 20, 30, 40, 50];
        return view('blade.tasks.task19', compact('arr'));
    }
    
    public function task20()
    {
        $arr = [1, 2, 3, 4, 5];
        return view('blade.tasks.task20', compact('arr'));
    }
    
    public function task21()
    {
        $arr = [1, 4, 9, 16, 25];
        return view('blade.tasks.task21', compact('arr'));
    }
    
    public function task22()
    {
        $arr = ['a' => 'Apple', 'b' => 'Banana', 'c' => 'Cherry'];
        return view('blade.tasks.task22', compact('arr'));
    }
    
    public function task23()
    {
        $arr = ['one' => 'Первый', 'two' => 'Второй', 'three' => 'Третий'];
        return view('blade.tasks.task23', compact('arr'));
    }
    
    public function task24()
    {
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('blade.tasks.task24', compact('arr'));
    }
    
    public function task25()
    {
        $data = 42;
        return view('blade.tasks.task25', compact('data'));
    }
    
    public function task26()
    {
        $matrix = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        return view('blade.tasks.task26', compact('matrix'));
    }
    
    public function task27()
    {
        $employees = [
            ['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],
            ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000],
            ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000],
        ];
        return view('blade.tasks.task27', compact('employees'));
    }
    
    public function task28()
    {
        $employees = [
            ['name' => 'user1', 'surname' => 'surname1', 'salary' => 1000],
            ['name' => 'user2', 'surname' => 'surname2', 'salary' => 2000],
            ['name' => 'user3', 'surname' => 'surname3', 'salary' => 3000],
        ];
        return view('blade.tasks.task28', compact('employees'));
    }
    
    public function task29()
    {
        $names = ['Анна', 'Иван', 'Мария', 'Петр'];
        return view('blade.tasks.task29', compact('names'));
    }
    
    public function task30()
    {
        $arr = ['один', 'два', 'три', 'четыре', 'пять'];
        return view('blade.tasks.task30', compact('arr'));
    }
    
    public function task31()
    {
        $arr = ['один', 'два', 'три', 'четыре', 'пять'];
        return view('blade.tasks.task31', compact('arr'));
    }
    
    public function task32()
    {
        $arr = ['Элемент 1', 'Элемент 2', 'Элемент 3', 'Элемент 4', 'Элемент 5'];
        return view('blade.tasks.task32', compact('arr'));
    }
    
    public function task33()
    {
        $arr = [10, 20, 30, 40, 50, 60];
        return view('blade.tasks.task33', compact('arr'));
    }
    
    public function task34()
    {
        $arr = [5, 3, 8, 0, 2, 4, 6];
        return view('blade.tasks.task34', compact('arr'));
    }
    
    public function task35()
    {
        $arr = [10, 0, 20, 0, 30, 40, 0, 50];
        return view('blade.tasks.task35', compact('arr'));
    }
    
    public function task36()
    {
        return view('blade.tasks.task36');
    }
}
