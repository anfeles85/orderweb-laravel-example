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
        Schema::create('order_activity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('order')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('activity_id')->constrained('activity')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['order_id', 'activity_id']);        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_activity');
    }
};
