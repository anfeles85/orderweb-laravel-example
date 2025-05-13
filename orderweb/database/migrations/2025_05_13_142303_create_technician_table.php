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
        Schema::create('technician', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document')->unique()->comment('cédula');
            $table->string('name', 80)->comment('nombre');
            $table->string('speciality', 50)->nullable()->comment('especialidad');
            $table->string('phone', 30)->nullable()->comment('teléfono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technician');
    }
};
