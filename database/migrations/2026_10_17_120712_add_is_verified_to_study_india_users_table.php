
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('study_india_users', 'is_verified')) {
            Schema::table('study_india_users', function (Blueprint $table) {
                $table->boolean('is_verified')->default(false);
            });
        }
    }

    public function down(): void
    {
        // Intentionally leave the column in place to avoid losing verification data.
    }
};
