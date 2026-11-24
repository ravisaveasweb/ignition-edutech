
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_abroad_users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone', 25)->nullable();
            $table->string('city')->nullable();
            $table->string('course_interested')->nullable();
            $table->string('profile_image')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::table('study_abroad_applications', function (Blueprint $table) {
            $table->foreignId('study_abroad_user_id')
                ->nullable()
                ->after('id')
                ->constrained('study_abroad_users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('study_abroad_applications', function (Blueprint $table) {
            $table->dropConstrainedForeignId('study_abroad_user_id');
        });

        Schema::dropIfExists('study_abroad_users');
    }
};
