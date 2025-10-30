<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('full_name');
            $table->string('age');
            $table->enum('gender', ['male', 'female', 'transgender'])->nullable();
            $table->string('phone_no')->nullable();
            $table->date('date');
            $table->string('time');
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('diet')->nullable();
            $table->string('addiction')->nullable();
            $table->string('mental_health')->nullable();
            $table->string('lab_test')->nullable();
            $table->tinyInteger("is_delete")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
