<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cuprequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            // Define validation rules based on the Cup model.
            'name' => 'required|string',
            'size' => 'required|string',
            'capacity' => 'required|integer',
            // Add more rules as needed.
        ];
    }
}
