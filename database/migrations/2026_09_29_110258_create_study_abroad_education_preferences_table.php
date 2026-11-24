<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_education_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')
                ->constrained('study_abroad_applications')
                ->cascadeOnDelete();

            $table->string('gender')->nullable();
            $table->text('preferred_destination')->nullable();
            $table->string('specialization')->nullable();
            $table->string('interested_university')->nullable();

            $table->string('english_test_status')->nullable();
            $table->string('entrance_exam_status')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_education_preferences');
    }
};