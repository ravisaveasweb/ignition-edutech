
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_india_reviews', function (Blueprint $table) {
            // Student details
            $table->string('student_name')->nullable();
            $table->string('email')->nullable();
            $table->string('country_code', 8)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('gender', 30)->nullable();
            $table->string('linkedin')->nullable();

            // Additional college information
            $table->string('college_display_name')->nullable();
            $table->decimal('course_fees', 12, 2)->nullable();
            $table->unsignedInteger('class_size')->nullable();

            // Previous academic details
            $table->string('board_12')->nullable();
            $table->decimal('score_12', 6, 2)->nullable();
            $table->string('score_type_12', 20)->nullable();

            $table->string('board_10')->nullable();
            $table->decimal('score_10', 6, 2)->nullable();
            $table->string('score_type_10', 20)->nullable();

            $table->string('graduation_course')->nullable();
            $table->decimal('graduation_score', 6, 2)->nullable();
            $table->string('graduation_score_type', 20)->nullable();

            // Admission details
            $table->string('referral_code')->nullable();
            $table->string('reservation', 10)->nullable();
            $table->string('reservation_type', 30)->nullable();
            $table->string('gdpi', 10)->nullable();

            // Hostel, placements and internships
            $table->string('hostel', 10)->nullable();
            $table->decimal('hostel_fees', 12, 2)->nullable();
            $table->string('placements', 10)->nullable();
            $table->decimal('average_package', 12, 2)->nullable();
            $table->string('internships', 10)->nullable();

            // Other colleges/courses and decision reason
            $table->json('other_colleges')->nullable();
            $table->text('reason_not_chosen')->nullable();

            // Store the complete submitted form, including any
            // additional fields and the original array values.
            $table->json('form_details')->nullable();

            // These fields are required by the older schema,
            // but are not currently collected by your frontend.
            $table->unsignedTinyInteger('academics_rating')
                ->nullable()->change();

            $table->unsignedTinyInteger('faculty_rating')
                ->nullable()->change();

            $table->unsignedTinyInteger('placements_rating')
                ->nullable()->change();

            $table->unsignedTinyInteger('infrastructure_rating')
                ->nullable()->change();

            $table->unsignedTinyInteger('campus_life_rating')
                ->nullable()->change();

            $table->string('review_title', 150)
                ->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('study_india_reviews', function (Blueprint $table) {
            $table->dropColumn([
                'student_name',
                'email',
                'country_code',
                'mobile',
                'gender',
                'linkedin',
                'college_display_name',
                'course_fees',
                'class_size',
                'board_12',
                'score_12',
                'score_type_12',
                'board_10',
                'score_10',
                'score_type_10',
                'graduation_course',
                'graduation_score',
                'graduation_score_type',
                'referral_code',
                'reservation',
                'reservation_type',
                'gdpi',
                'hostel',
                'hostel_fees',
                'placements',
                'average_package',
                'internships',
                'other_colleges',
                'reason_not_chosen',
                'form_details',
            ]);

            // Restore the original non-nullable schema.
            // Only roll back if existing records satisfy it.
            $table->unsignedTinyInteger('academics_rating')
                ->nullable(false)->change();

            $table->unsignedTinyInteger('faculty_rating')
                ->nullable(false)->change();

            $table->unsignedTinyInteger('placements_rating')
                ->nullable(false)->change();

            $table->unsignedTinyInteger('infrastructure_rating')
                ->nullable(false)->change();

            $table->unsignedTinyInteger('campus_life_rating')
                ->nullable(false)->change();

            $table->string('review_title', 150)
                ->nullable(false)->change();
        });
    }
};
