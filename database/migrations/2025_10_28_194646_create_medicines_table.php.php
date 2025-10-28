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
            $table->string('generic_name')->unique();
            $table->string('brand_name')->nullable();
            $table->string('dosage_strength');
            $table->enum('drug_form',['Tablet', 'Syrup', 'Capsule', 'Injection']);
            $table->enum('unit_of_measure',['mg', 'ml', 'IU'])->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('side_effects')->nullable();
            $table->boolean('is_active')->default(true);
            $table->tinyInteger("is_delete")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
