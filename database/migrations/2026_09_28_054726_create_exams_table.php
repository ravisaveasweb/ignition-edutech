<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('full_name')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('conducted_by')->nullable();
            $table->string('duration')->nullable();
            $table->string('mode')->nullable();
            $table->string('score_range')->nullable();
            $table->string('validity')->nullable();
            $table->decimal('application_fee', 10, 2)->nullable();
            $table->string('official_website')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
