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
            $table->id();
            $table->string("name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("dob");
            $table->string("gender");
            $table->string("contact")->unique();
            $table->string("email")->nullable();
            $table->string("password")->nullable();
            $table->string("class");
            $table->string("address");
            $table->float("status")->default(0);
            $table->dateTime("addmition_date")->nullable();
            $table->timestamps();
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
