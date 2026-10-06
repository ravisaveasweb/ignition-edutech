<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('global_scholarship_data', function (Blueprint $table) {
            $table->id();
            $table->string('scholarship_id')->unique();
            $table->text('scholarship_name');
            $table->string('provider')->nullable();
            $table->string('target_groups')->nullable();
            $table->text('subject_areas')->nullable();
            $table->text('eligible_countries')->nullable();
            $table->string('study_purpose')->nullable();
            $table->text('description_en')->nullable();
            $table->string('host_country')->nullable();
            $table->string('scholarship_amount')->nullable();
            $table->string('degree_level')->nullable();
            $table->string('duration')->nullable();
            $table->timestamps();

            $table->index('host_country');
            $table->index('degree_level');
            $table->index('provider');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('global_scholarship_data');
    }
};