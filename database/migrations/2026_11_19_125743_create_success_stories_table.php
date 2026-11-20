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
        Schema::create('success_stories', function (Blueprint $table) {
            $table->id();

            $table->string('student_name');
            $table->string('slug')->unique();
            $table->string('college_name')->nullable();
            $table->string('course_name')->nullable();

            $table->string('country')->nullable();
            $table->string('category')->default('study-abroad');

            $table->string('student_image')->nullable();
            $table->string('banner_image')->nullable();

            $table->string('designation')->nullable();
            $table->string('company_name')->nullable();

            $table->text('short_description')->nullable();
            $table->longText('story_content')->nullable();

            $table->decimal('rating', 2, 1)->default(5.0);

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('status')->default(true);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('success_stories');
    }
};
