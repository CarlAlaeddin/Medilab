<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
            'image'         =>  ['required', 'mimes:png,jpg'],
            'nike_name'     =>  ['required', 'min:3'],
            'phone_number'  =>  ['required', 'integer'],
            'biography'     =>  ['required', 'string'],
        ];
    }
}
