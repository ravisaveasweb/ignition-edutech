<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_past_education', function (Blueprint $table) {
            $table->id();

            $table->foreignId('application_id')
                ->constrained('study_abroad_applications')
                ->cascadeOnDelete();

            $table->string('tenth_board')->nullable();
            $table->string('tenth_passing_year')->nullable();
            $table->string('tenth_percentage')->nullable();
            $table->string('tenth_school_name')->nullable();

            $table->string('twelfth_board')->nullable();
            $table->string('twelfth_passing_year')->nullable();
            $table->string('twelfth_percentage')->nullable();
            $table->string('twelfth_school_name')->nullable();
            $table->string('twelfth_specialization')->nullable();

            $table->boolean('passport')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_past_education');
    }
};