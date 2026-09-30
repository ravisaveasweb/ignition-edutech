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
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreignId('author_id')->nullable()->constrained('blog_authors')->onDelete('set null')->after('content');
            $table->text('excerpt')->nullable()->after('slug');
            $table->json('tags')->nullable()->after('excerpt');
            $table->timestamp('published_at')->nullable()->after('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
            $table->dropColumn('excerpt');
            $table->dropColumn('tags');
        });
    }
};
