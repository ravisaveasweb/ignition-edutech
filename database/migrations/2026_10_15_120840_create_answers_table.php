
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->longText('body');
            $table->unsignedInteger('helpful_count')->default(0);
            $table->boolean('is_accepted')->default(false);
            $table->timestamps();

            $table->index(['question_id', 'is_accepted']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
