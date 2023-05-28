<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
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
            'position_doctor_id'        =>      ['required','integer'],
            'image'                     =>      ['nullable','mimes:png,jpg,webp,webm,jpeg'],
            'name'                      =>      ['required','min:3','string'],
            'biography'                 =>      ['required','min:50'],
            'is_active'                 =>      ['required','boolean'],
            'linkedin'                  =>      ['nullable'],
            'twitter'                   =>      ['nullable'],
            'facebook'                  =>      ['nullable'],
            'instagram'                 =>      ['nullable'],
        ];
    }
}
