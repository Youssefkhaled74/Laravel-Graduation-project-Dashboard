<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreStayRequest extends FormRequest
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
            'address'  => 'required|string|max:50',
            'photo' =>'required|string|max:1000|min:50',
            'price'  => 'required|string|max:50',
            
        ];
    }
}