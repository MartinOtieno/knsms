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
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('donor_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->string('address');
            $table->string('national_id');
            $table->string('company');
            $table->string('city');
            $table->string('phone_no');
            $table->string('donated_amount');
            $table->date('donated_date');
            $table->string('nationality');
            $table->string('occupation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
