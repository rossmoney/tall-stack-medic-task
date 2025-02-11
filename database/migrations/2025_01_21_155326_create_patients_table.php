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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->string('name')->nullable();
            $table->date('dob')->nullable();
            $table->decimal('age', 7, 4)->nullable();
            $table->tinyInteger('sex')->nullable();
            $table->decimal('weight', 4, 1)->nullable();
            $table->text('hpc')->nullable();
            $table->text('pmh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
