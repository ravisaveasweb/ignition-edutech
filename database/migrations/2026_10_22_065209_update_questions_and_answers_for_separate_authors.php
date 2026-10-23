
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Keep legacy user_id values, but remove the dependency on users.
        foreach (['questions', 'answers'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropForeign(['user_id']);
                $table->unsignedBigInteger('user_id')->nullable()->change();
                $table->nullableMorphs('author');
            });
        }

        // Recover author details for existing shadow users when possible.
        if (Schema::hasTable('users')) {
            $legacyUsers = DB::table('users')
                ->where('email', 'like', '%@qna.ignition.local')
                ->get(['id', 'email']);

            foreach ($legacyUsers as $legacyUser) {
                $type = null;
                $accountId = null;

                if (preg_match(
                    '/^study-india-(\d+)@qna\.ignition\.local$/',
                    $legacyUser->email,
                    $matches
                )) {
                    $type = \App\Models\StudyIndiaUser::class;
                    $accountId = (int) $matches[1];

                    if (
                        !Schema::hasTable('study_india_users') ||
                        !DB::table('study_india_users')
                            ->where('id', $accountId)
                            ->exists()
                    ) {
                        continue;
                    }
                } elseif (preg_match(
                    '/^study-abroad-(\d+)@qna\.ignition\.local$/',
                    $legacyUser->email,
                    $matches
                )) {
                    $type = \App\Models\StudyAbroadUser::class;
                    $accountId = (int) $matches[1];

                    if (
                        !Schema::hasTable('study_abroad_users') ||
                        !DB::table('study_abroad_users')
                            ->where('id', $accountId)
                            ->exists()
                    ) {
                        continue;
                    }
                }

                if (!$type || !$accountId) {
                    continue;
                }

                foreach (['questions', 'answers'] as $tableName) {
                    DB::table($tableName)
                        ->where('user_id', $legacyUser->id)
                        ->update([
                            'author_type' => $type,
                            'author_id' => $accountId,
                        ]);
                }
            }
        }
    }

    public function down(): void
    {
        // Remove polymorphic columns without deleting Q&A records.
        // Keep user_id nullable and without a foreign key because new
        // records may no longer have a corresponding users-table row.
        foreach (['questions', 'answers'] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropMorphs('author');
            });
        }
    }
};
