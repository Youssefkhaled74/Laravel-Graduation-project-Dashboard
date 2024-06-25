<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'email|required|string|max:50|',
            'password' => 'string|max:50',
            'phone' => 'required|string|max:50',
            'nationalty' => 'required|string|max:50',
            'passId' => 'required|string|max:50',
            'car_id' => 'string|max:50',
            'fly_id' => 'string|max:50',
        ];
    }
}