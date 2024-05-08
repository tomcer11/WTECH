<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'price' => 'required',
            'producer' => 'required|max:20',
            'model' => 'required|max:100',
            'model_year' => 'required',
            'frame' => 'required|max:20',
            'fork_type' => 'required|max:20',
            'frame_size' => 'required|max:1',
            'front_lift' => 'required',
            'fork' => 'required|max:100',
            'rear_shock' => 'required|max:100',
            'front_tire' => 'required|max:100',
            'rear_tire' => 'required|max:100',
            'rim' => 'required|max:100',
            'cassette_count' => 'required',
            'front_cassette_count' => 'required',
            'chain' => 'required|max:100',
            'drive_train' => 'required|max:100',
            'cranks' => 'required|max:100',
            'cassette' => 'required|max:100',
            'derailleur' => 'required|max:100',
            'brakes' => 'required|max:100',
            'front_rotor' => 'required|max:100',
            'rear_rotor' => 'required|max:100',
            'stem' => 'required|max:100',
            'handbar' => 'required|max:100',
            'grip' => 'required|max:100',
            'seat_post' => 'required|max:100',
            'seat' => 'required|max:100',
            'image' => 'required|mimes:png,jpg',
        ];
    }
}
