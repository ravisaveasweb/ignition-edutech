<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_india_users', function (Blueprint $table) {
            $table->string('phone', 20)->change();
        });
    }

    public function down(): void
    {
        // Keep the larger phone column to avoid truncating existing data.
    }
};