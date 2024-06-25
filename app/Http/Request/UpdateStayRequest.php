<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStayRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'address'  => 'required|string|max:50',
            'photo' =>'required|string|max:50',
            'price'  => 'required|string|max:50',
        ];

    }
}


//,'max:1000','mimes:png,jpg,jpeg,pdf'