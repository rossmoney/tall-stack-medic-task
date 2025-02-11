<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->string('ops_text')->nullable();
            $table->time('time_999')->nullable();
            $table->time('time_hems')->nullable();
            $table->time('time_lift')->nullable();
            $table->time('time_land_scene')->nullable();
            $table->time('time_scene')->nullable();
            $table->time('time_depart')->nullable();
            $table->time('time_land_hospital')->nullable();
            $table->time('time_hospital')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
