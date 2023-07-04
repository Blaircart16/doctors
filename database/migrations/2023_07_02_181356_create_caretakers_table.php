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
        Schema::create('caretakers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('relationship');
            $table->string('contact');
            $table->string('email');
            $table->string('password');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('patientID')->references('id')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caretakers');
    }
};
