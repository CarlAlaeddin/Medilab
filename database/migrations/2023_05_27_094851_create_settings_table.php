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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // logo
            $table->string('logo');

            // contact
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('phone_number');

            // socials
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('telegram');

            // hero
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('hero_button_text');
            $table->string('hero_button_src');

            // why us
            $table->string('why_us_image');
            $table->string('why_us_title');
            $table->text('why_us_description');
            $table->string('why_us_button_text')->nullable();
            $table->string('why_us_button_src')->nullable();

            // about
            $table->string('about_title');
            $table->string('about_description');

            // services
            $table->string('service_title');
            $table->text('service_description');

            // Appointment
            $table->string('appointment_title');
            $table->text('appointment_description');

            // Departments
            $table->string('departments_title');
            $table->text('departments_description');

            // Doctors
            $table->string('doctors_title');
            $table->text('doctors_description');

            // Questions
            $table->string('questions_title');
            $table->text('questions_description');

            // Gallery
            $table->string('gallery_title');
            $table->string('gallery_description');

            // Contact
            $table->string('contact_title');
            $table->text('contact_description');
            $table->string('latitude');
            $table->string('longitude');

            // footer
            $table->text('footer_description');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
