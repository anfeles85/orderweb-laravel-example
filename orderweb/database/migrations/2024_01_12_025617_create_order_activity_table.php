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
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("activity_id");
            $table->unique(['order_id', 'activity_id'], 'Actividades por orden');
            $table->foreign('order_id')->references("id")->on("order")->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('activity_id')->references("id")->on("activity")->onDelete('cascade')->onUpdate('cascade');
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
