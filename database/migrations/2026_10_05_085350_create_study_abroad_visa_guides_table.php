<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_visa_guides', function (Blueprint $table) {
            $table->id();

            $table->foreignId('visa_country_id')
                ->constrained('study_abroad_visa_countries')
                ->cascadeOnDelete();

            $table->string('page_title');
            $table->text('overview')->nullable();

            $table->string('processing_time')->nullable();
            $table->string('application_fee')->nullable();

            $table->text('financial_requirement')->nullable();

            $table->text('eligibility')->nullable();

            $table->string('official_website')->nullable();

            $table->boolean('status')->default(1);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_visa_guides');
    }
};