<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'locality_name' => 'required|string',
            'address_street' => 'required|string',
            'address_number' => 'required|integer',
            'name' => 'required|string',
            'surname' => 'required|string',
            'age' => 'required|integer',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:4',
            'phone' => 'required|integer|min:6'
        ];
    }
}
