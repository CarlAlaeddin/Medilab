<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo'  => 'Medical',

            'email' =>  $this->faker->email,
            'phone_number'  =>  $this->faker->phoneNumber,
            'address'  =>  $this->faker->address,

            'twitter'  => 'https://www.twitter.com',
            'facebook'  => 'https://www.facebook.com',
            'linkedin'  => 'https://www.linkedin.com',
            'instagram'  => 'https://www.instagram.com',
            'telegram'  => 'https://www.telegram.com',

            'hero_title'    =>  'WELCOME TO MEDILAB',
            'hero_description'    =>  'We are team of talented designers making websites with Bootstrap',

            'hero_button_text'    =>  'GET STARTED',
            'hero_button_src'    =>  env('APP_URL'),

            'why_us_image'  =>  $this->faker->imageUrl,
            'why_us_title'  =>  'Why Choose Medilab?',
            'why_us_description'    =>  $this->faker->text,
            'why_us_button_text'    =>  'Learn More',
            'why_us_button_src' =>  $this->faker->url,

            'about_title'   => 'Enim quis est voluptatibus aliquid consequatur fugiat',
            'about_description' => $this->faker->text,

            'service_title' => 'Services',
            'service_description'   => $this->faker->realText,

            'appointment_title' =>  'Make an Appointment',
            'appointment_description'   =>  $this->faker->realText,

            'departments_title' => 'Departments',
            'departments_description'   =>  $this->faker->realText,

            'doctors_title' => 'Doctors',
            'doctors_description'   => $this->faker->realText,

            'questions_title'  => 'Frequently Asked Questions',
            'questions_description' => $this->faker->realText,

            'gallery_title' =>  'Gallery',
            'gallery_description'   =>  $this->faker->realText,

            'contact_title' =>  'Contact',
            'contact_description'   =>  $this->faker->realText,
            'latitude'  =>  '35.694675',
            'longitude' =>  '51.447950',

            'footer_description'    => $this->faker->realText,
            'author' => 'Carl Alaeddin',
        ];
    }
}
