<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')
                ->constrained('study_abroad_applications')
                ->cascadeOnDelete();

            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 20);
            $table->string('city');
            $table->string('course_interested');
            $table->string('start_study');
            $table->boolean('terms_accepted')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_personal_details');
    }
};