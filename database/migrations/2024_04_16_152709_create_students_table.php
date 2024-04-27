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
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('reg_no')->unique(); 
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone_no');
            $table->string('address');
            $table->string('city');
            $table->string('orphanage_status');
            $table->enum('status', ['approved', 'rejected', 'waiting'])->default('waiting');
            $table->string('year_of_study');
            $table->string('faculty');
            $table->string('course');
            $table->string('semester');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('disability');
            $table->string('transcript');
            $table->string('acct_no');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
