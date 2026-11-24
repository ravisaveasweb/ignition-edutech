

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_reviews', function (Blueprint $table) {
            $table->id();

            // Links the review to the existing Study Abroad account.
            $table->unsignedBigInteger('study_abroad_user_id')->index();

            // Student and university details.
            $table->string('student_name', 150);
            $table->string('student_email', 255);
            $table->string('student_mobile', 20);

            $table->string('university_name', 255)->index();
            $table->string('country', 100);
            $table->string('course_name', 255);
            $table->unsignedSmallInteger('enrollment_year');
            $table->decimal('annual_tuition_fees', 15, 2)->nullable();

            // Written experience.
            $table->text('reason_for_choice');
            $table->text('likes');
            $table->text('improvements');
            $table->text('advice')->nullable();

            // Ratings and student life.
            $table->unsignedTinyInteger('academics_rating');
            $table->string('placements_support', 50);
            $table->string('accommodation_type', 100);
            $table->text('campus_jobs')->nullable();

            $table->unsignedTinyInteger('overall_rating');
            $table->string('review_headline', 100);

            // Keep the submitted form data for reference.
            $table->json('form_details')->nullable();

            // Reviews remain private until an admin approves them.
            $table->string('status', 20)->default('pending')->index();

            $table->timestamps();

            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_abroad_reviews');
    }
};
