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
        Schema::create('patient_examinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->string('airway')->nullable();
            $table->string('breathing')->nullable();
            $table->string('circulation')->nullable();
            $table->integer('eye_response')->nullable();
            $table->integer('verbal_response')->nullable();
            $table->integer('motor_response')->nullable();
            $table->string('glasgow_coma_scale')->nullable();
            $table->boolean('entrapment')->default(0);
            $table->text('secondary_survey')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_examinations');
    }
};
