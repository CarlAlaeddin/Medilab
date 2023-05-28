<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'image'         =>   ['nullable','mimes:png,jpg,webp,webm,jpeg'],
            'name'          =>   ['required', 'string', 'min:10', 'max:30'],
            'description'   =>   ['required', 'string', 'min:50'],
            'is_active'     =>   ['required', 'boolean'],
        ];
    }
}
