
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_india_users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100);
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->string('city', 100);
            $table->string('course_interested', 150);
            $table->boolean('is_verified')->default(false);
            $table->string('otp_hash')->nullable();
            $table->timestamp('otp_expires_at')->nullable();
            $table->timestamp('otp_sent_at')->nullable();
            $table->unsignedTinyInteger('otp_attempts')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_india_users');
    }
};
