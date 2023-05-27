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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('department_id')->unsigned();
            $table->foreignId('doctor_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('date');
            $table->text('message');
            $table->boolean('is_active');

            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
