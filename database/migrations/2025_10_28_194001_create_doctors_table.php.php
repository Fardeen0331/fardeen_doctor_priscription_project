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
            $table->string('gender', ['male', 'female', 'transgender'])->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('cnic')->nullable();
            $table->string('specialization')->nullable();
            $table->string('qualification')->nullable();
            $table->string('pmdc_registrtion_no')->nullable();
            $table->string('clinic_hospital_name')->nullable();
            $table->string('consultaion_fee')->nullable();
            $table->json('availability')->nullable();
            $table->string('perception_access')->default(0);
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
