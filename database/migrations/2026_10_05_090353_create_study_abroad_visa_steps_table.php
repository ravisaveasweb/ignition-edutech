<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_visa_steps', function (Blueprint $table) {
            $table->id();

            $table->foreignId('visa_guide_id')
                ->constrained('study_abroad_visa_guides')
                ->cascadeOnDelete();

            $table->unsignedInteger('step_number');
            $table->string('title');
            $table->text('description')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();

            $table->index([
                'visa_guide_id',
                'step_number'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_visa_steps');
    }
};