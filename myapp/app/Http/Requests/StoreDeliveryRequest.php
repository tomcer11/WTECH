<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeliveryRequest extends FormRequest
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
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|max:254',
            'phone' => 'required|max:12',
            'street' => 'required|max:30',
            'house_number' => 'required|integer',
            'city' => 'required|max:30',
            'postcode' => 'required|max:5'
        ];
    }
}
