<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeStationRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'capacity' => 'required|number|min:0',
            'longitude' => 'required|float',
            'laditude' => 'required|float',
            'start_availability' =>'required|time',
            'end_availability' => 'required|time|after:start_availability',
            'note' => 'nullable|string|max:255',
        ];
    }
}
