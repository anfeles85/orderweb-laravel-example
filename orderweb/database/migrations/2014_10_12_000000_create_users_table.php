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
            $table->id();
            $table->string('name')->comment('nombre del usuario');
            $table->string('email')->unique()->comment('correo unico');            
            $table->string('password')->comment('contrasena del usuario');
            $table->foreignId('role_id')->constrained("role")->onDelete('cascade')->onUpdate('cascade');
            $table->rememberToken()->comment('token para recuperar contrasena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
