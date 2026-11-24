<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('world_university_rankings', function (Blueprint $table) {
            $table->id();

            $table->string('rank_2026')->nullable();
            $table->string('previous_rank')->nullable();
            $table->string('institution_name');
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('status')->nullable();

            $table->decimal('ar_score', 5, 1)->nullable();
            $table->string('ar_rank')->nullable();

            $table->decimal('er_score', 5, 1)->nullable();
            $table->string('er_rank')->nullable();

            $table->decimal('fsr_score', 5, 1)->nullable();
            $table->string('fsr_rank')->nullable();

            $table->decimal('cpf_score', 5, 1)->nullable();
            $table->string('cpf_rank')->nullable();

            $table->decimal('ifr_score', 5, 1)->nullable();
            $table->string('ifr_rank')->nullable();

            $table->decimal('isr_score', 5, 1)->nullable();
            $table->string('isr_rank')->nullable();

            $table->decimal('isd_score', 5, 1)->nullable();
            $table->string('isd_rank')->nullable();

            $table->decimal('irn_score', 5, 1)->nullable();
            $table->string('irn_rank')->nullable();

            $table->decimal('eo_score', 5, 1)->nullable();
            $table->string('eo_rank')->nullable();

            $table->decimal('sus_score', 5, 1)->nullable();
            $table->string('sus_rank')->nullable();

            $table->decimal('overall_score', 5, 1)->nullable();

            $table->timestamps();

            $table->index('institution_name');
            $table->index('country');
            $table->index('rank_2026');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('world_university_rankings');
    }
};