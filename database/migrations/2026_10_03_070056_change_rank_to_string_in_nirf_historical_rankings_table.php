<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('nirf_historical_rankings', function (Blueprint $table) {
            $table->string('rank')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('nirf_historical_rankings', function (Blueprint $table) {
            $table->unsignedInteger('rank')->nullable()->change();
        });
    }
};