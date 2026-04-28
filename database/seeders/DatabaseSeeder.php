<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
      public function run(): void
    {
        // ========== ЗАПОЛНЯЕМ ТАБЛИЦУ posts ==========ы
        DB::table('posts')->insert([
            [
                'title' => 'Первый пост',
                'slug' => Str::random(10) . '-1',
                'likes' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Второй пост',
                'slug' => Str::random(10) . '-2',
                'likes' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Третий пост',
                'slug' => Str::random(10) . '-3',
                'likes' => rand(10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ========== ЗАПОЛНЯЕМ ТАБЛИЦУ users ==========
        DB::table('users')->insert([
            [
                'name' => 'Иван Петров',
                'email' => 'ivan@example.com',
                'age' => 25,
                'salary' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Мария Сидорова',
                'email' => 'maria@example.com',
                'age' => 30,
                'salary' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(6) . '@gmail.com',
                'age' => rand(18, 60),
                'salary' => rand(30000, 120000),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
