<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   

public function up(): void
{
    Schema::create('success_story_reviews', function (Blueprint $table) {
        $table->id();

        $table->string('student_name');
        $table->string('course_name')->nullable();
        $table->string('college_name')->nullable();

        $table->string('student_image')->nullable();

        $table->string('review_type')->default('review');

        $table->text('review');

        $table->decimal('rating', 2, 1)->default(5.0);

        $table->boolean('is_approved')->default(false);
        $table->boolean('status')->default(true);

        $table->unsignedInteger('sort_order')->default(0);

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('success_story_reviews');
}

};
