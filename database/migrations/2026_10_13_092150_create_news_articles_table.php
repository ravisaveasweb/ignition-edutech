<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category')->default('News')->index();
            $table->text('excerpt')->nullable();
            $table->text('featured_image')->nullable();
            $table->string('source_name')->nullable();
            $table->text('source_url');
            $table->char('source_url_hash', 64)->unique();
            $table->text('feed_url')->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamp('imported_at')->nullable();
            $table->string('status')->default('published')->index();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news_articles');
    }
};