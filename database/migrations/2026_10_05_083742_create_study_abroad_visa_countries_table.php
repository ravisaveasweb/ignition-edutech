<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_visa_countries', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('country_code', 10)->nullable();
            $table->string('flag')->nullable();
            $table->string('visa_name');
            $table->text('short_description')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_visa_countries');
    }
};