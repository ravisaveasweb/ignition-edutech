
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_india_reviews', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('study_india_user_id')->index();

            $table->string('college_name');
            $table->string('course');
            $table->unsignedSmallInteger('graduation_year')->nullable();

            $table->unsignedTinyInteger('overall_rating');
            $table->unsignedTinyInteger('academics_rating');
            $table->unsignedTinyInteger('faculty_rating');
            $table->unsignedTinyInteger('placements_rating');
            $table->unsignedTinyInteger('infrastructure_rating');
            $table->unsignedTinyInteger('campus_life_rating');

            $table->string('review_title', 150);
            $table->text('review_text');
            $table->text('pros')->nullable();
            $table->text('cons')->nullable();

            $table->string('status')->default('pending')->index();

            $table->timestamps();

            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_india_reviews');
    }
};
