<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_test_scores', function (Blueprint $table) {
            $table->id();

            $table->foreignId('application_id')
                ->constrained('study_abroad_applications')
                ->cascadeOnDelete();

            $table->string('test_type');
            $table->string('test_name');
            $table->string('score')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_test_scores');
    }
};