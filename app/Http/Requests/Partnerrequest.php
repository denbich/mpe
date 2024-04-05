<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Partnerrequest extends FormRequest
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
            // Define validation rules based on the Partner model.
            'name' => 'required|string',
            'email' => 'nullable|email',
            'telephone' => 'nullable|string',
            'street' => 'required|string',
            'building_number' => 'required|string',
            'postcode' => 'required|string',
            'city' => 'required|string',
            'logo_path' => 'required|string',
            // Add more rules as needed.
        ];
    }
}
