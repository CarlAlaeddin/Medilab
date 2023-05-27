<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'logo'                     => ['required'],
            'email'                    => ['required'],
            'phone_number'             => ['required'],
            'address'                  => ['required'],
            'twitter'                  => ['required'],
            'linkedin'                 => ['required'],
            'facebook'                 => ['required'],
            'instagram'                => ['required'],
            'telegram'                 => ['required'],
            'hero_title'               => ['required'],
            'hero_description'         => ['required'],
            'hero_button_text'         => ['required'],
            'hero_button_src'          => ['required'],
            'why_us_image'             => ['nullable'],
            'why_us_title'             => ['required'],
            'why_us_description'       => ['required'],
            'why_us_button_text'       => ['required'],
            'why_us_button_src'        => ['required'],
            'about_title'              => ['required'],
            'about_description'        => ['required'],
            'service_title'            => ['required'],
            'service_description'      => ['required'],
            'appointment_title'        => ['required'],
            'appointment_description'  => ['required'],
            'departments_title'        => ['required'],
            'departments_description'  => ['required'],
            'doctors_title'            => ['required'],
            'doctors_description'      => ['required'],
            'questions_title'          => ['required'],
            'questions_description'    => ['required'],
            'gallery_title'            => ['required'],
            'gallery_description'      => ['required'],
            'contact_title'            => ['required'],
            'contact_description'      => ['required'],
            'latitude'                 => ['required'],
            'longitude'                => ['required'],
            'footer_description'       => ['required'],
            'author'                   => ['required'],
        ];
    }
}
