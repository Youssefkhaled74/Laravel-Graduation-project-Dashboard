<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'model' => 'required|string|max:50',
            'priceForDay' => 'required|string|min:1|max:10000',
            'description' => 'nullable|string',
            'carPhoto' => 'required|max:2000|mimes:png,jpg,jpeg,pdf'
        ];
    }
}