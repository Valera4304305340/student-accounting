<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // ← Добавляем трейт

class Post extends Model
{
    use SoftDeletes; // ← Подключаем мягкое удаление
    
    protected $fillable = ['title', 'slug', 'likes', 'text'];
}