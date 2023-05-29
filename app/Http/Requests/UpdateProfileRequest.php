<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'          =>  ['required', 'min:3', 'max:20', 'string'],
            'image'         =>  ['nullable', 'mimes:png,jpg'],
            'nike_name'     =>  ['required', 'min:3'],
            'phone_number'  =>  ['required', 'integer'],
            'biography'     =>  ['required', 'string'],
        ];
    }
}
