<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_visa_documents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('visa_guide_id')
                ->constrained('study_abroad_visa_guides')
                ->cascadeOnDelete();

            $table->string('document_name');
            $table->text('description')->nullable();
            $table->boolean('is_required')->default(1);
            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('status')->default(1);

            $table->timestamps();

            $table->index([
                'visa_guide_id',
                'sort_order'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_visa_documents');
    }
};