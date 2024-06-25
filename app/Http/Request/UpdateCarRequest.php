<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
        // return [
        //     'code' => 'required|string|max:50|unique:products,code,'.$this->product->id,
        //     'name' => 'required|string|max:250',
        //     'quantity' => 'required|integer|min:1|max:10000',
        //     'price' => 'required',
        //     'description' => 'nullable|string'
        // ];
        return [
            'name' => 'required|string|max:20',
            'model' => 'required|string|max:50',
            'priceForDay' => 'required|string|min:1|max:10000',
            'description' => 'nullable|string',
            'carPhoto' => 'required|max:2000|mimes:png,jpg,jpeg,pdf'
        ];

    }
}


//,'max:1000','mimes:png,jpg,jpeg,pdf'