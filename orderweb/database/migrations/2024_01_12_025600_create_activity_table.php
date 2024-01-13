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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('description', 100)->comment('descripción de la actividad');
            $table->integer('hours')->comment('horas estimadas de duración');
            $table->unsignedBigInteger("technician_id");
            $table->foreign('technician_id')->references("document")->on("technician")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('type_id')->constrained("type_activity")->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
