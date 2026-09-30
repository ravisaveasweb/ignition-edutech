<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Existing base tables are created before this migration.

        if (! Schema::hasTable('university_placements')) {
            Schema::create('university_placements', function (Blueprint $table) {
                $table->id();
                $table->foreignId('university_id')
                    ->constrained('universities')
                    ->cascadeOnDelete();
                $table->string('year')->nullable();
                $table->decimal('average_package', 12, 2)->nullable();
                $table->decimal('highest_package', 12, 2)->nullable();
                $table->decimal('placement_percentage', 5, 2)->nullable();
                $table->text('description')->nullable();
                $table->boolean('status')->default(true);
                $table->timestamps();

                $table->index(['university_id', 'status']);
            });
        }

        if (! Schema::hasTable('university_recruiters')) {
            Schema::create('university_recruiters', function (Blueprint $table) {
                $table->id();
                $table->foreignId('university_id')
                    ->constrained('universities')
                    ->cascadeOnDelete();
                $table->string('name');
                $table->string('logo')->nullable();
                $table->string('website')->nullable();
                $table->boolean('status')->default(true);
                $table->timestamps();

                $table->index(['university_id', 'status']);
            });
        }

        if (! Schema::hasTable('university_facilities')) {
            Schema::create('university_facilities', function (Blueprint $table) {
                $table->id();
                $table->foreignId('university_id')
                    ->constrained('universities')
                    ->cascadeOnDelete();
                $table->string('name');
                $table->text('description')->nullable();
                $table->string('icon')->nullable();
                $table->boolean('status')->default(true);
                $table->timestamps();

                $table->index(['university_id', 'status']);
            });
        }

        if (! Schema::hasTable('university_admissions')) {
            Schema::create('university_admissions', function (Blueprint $table) {
                $table->id();
                $table->foreignId('university_id')
                    ->constrained('universities')
                    ->cascadeOnDelete();
                $table->string('title');
                $table->text('description')->nullable();
                $table->text('eligibility')->nullable();
                $table->text('admission_process')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->boolean('status')->default(true);
                $table->timestamps();

                $table->index(['university_id', 'status']);
            });
        }

        // One SEO record per university.
        Schema::table('seo_metas', function (Blueprint $table) {
            $table->foreignId('university_id')
                ->nullable()
                ->unique()
                ->after('id')
                ->constrained('universities')
                ->cascadeOnDelete();

            $table->string('canonical_url')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('seo_metas', function (Blueprint $table) {
            $table->dropForeign(['university_id']);
            $table->dropUnique('seo_metas_university_id_unique');
            $table->dropColumn([
                'university_id',
                'canonical_url',
                'og_title',
                'og_description',
                'og_image',
            ]);
        });

        Schema::dropIfExists('university_admissions');
        Schema::dropIfExists('university_facilities');
        Schema::dropIfExists('university_recruiters');
        Schema::dropIfExists('university_placements');

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropForeign(['university_id']);
            $table->dropIndex(['university_id', 'status']);
            $table->dropColumn('university_id');
        });

        Schema::table('scholarships', function (Blueprint $table) {
            $table->dropForeign(['university_id']);
            $table->dropIndex(['university_id']);
            $table->dropColumn('university_id');
        });
    }
};
