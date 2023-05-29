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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->uuid()->unique();
            $table->foreignId('user_id')->unsigned();
            $table->enum('role',['SuperAdmin','Admin','Writer'])->default('Writer');
            $table->boolean('is_active')->default(1);
            $table->string('image');
            $table->string('nike_name')->nullable();
            $table->text('biography');
            $table->string('phone_number');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
