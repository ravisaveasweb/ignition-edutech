<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nirf_historical_rankings', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('year')->nullable();
            $table->string('category')->nullable();
            $table->string('institute_id');
            $table->string('institute_name');
            $table->decimal('tlr', 8, 2)->nullable();
            $table->decimal('rpc', 8, 2)->nullable();
            $table->decimal('go', 8, 2)->nullable();
            $table->decimal('oi', 8, 2)->nullable();
            $table->decimal('perception', 8, 2)->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->decimal('score', 8, 2)->nullable();
            $table->unsignedInteger('rank')->nullable();
            $table->unsignedInteger('source_block')->nullable();
            $table->timestamps();

            $table->index(['year', 'category']);
            $table->index(['institute_id']);
            $table->index(['rank']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nirf_historical_rankings');
    }
};