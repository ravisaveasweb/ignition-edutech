
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('study_india_users', function (Blueprint $table) {
            if (!Schema::hasColumn('study_india_users', 'is_active')) {
                $table->boolean('is_active')->default(true);
            }

            if (!Schema::hasColumn('study_india_users', 'email_notifications')) {
                $table->boolean('email_notifications')->default(true);
            }
        });
    }

    public function down(): void
    {
        Schema::table('study_india_users', function (Blueprint $table) {
            if (Schema::hasColumn('study_india_users', 'email_notifications')) {
                $table->dropColumn('email_notifications');
            }

            if (Schema::hasColumn('study_india_users', 'is_active')) {
                $table->dropColumn('is_active');
            }
        });
    }
};
