<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();                      // id
        $table->string('name');            // имя
        $table->string('email')->unique(); // email, уникальный
        $table->integer('age');            // возраст
        $table->integer('salary');         // зарплата
        $table->timestamps();              // created_at, updated_a
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
