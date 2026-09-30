<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('established_year')->nullable();
            $table->string('university_type')->nullable();
            $table->string('ownership')->nullable();
            $table->string('accreditation')->nullable();
            $table->decimal('average_package', 12, 2)->nullable();
            $table->decimal('highest_package', 12, 2)->nullable();
            $table->decimal('placement_percentage', 5, 2)->nullable();
            $table->unsignedInteger('ranking')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode', 20)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['state_id', 'city_id']);
            $table->index(['status', 'featured']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
