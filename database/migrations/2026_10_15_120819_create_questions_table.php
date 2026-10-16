
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('title', 180);
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('category', 100);
            $table->string('college_name')->nullable();
            $table->string('status', 20)->default('open');
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();

            $table->index(['category', 'status']);
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
