<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class StorePutRequest extends FormRequest
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
            "name" => "required|min:5|max:100",
            "description" => "required|max:200",
            "price" => "required",
            "image" => "mimes:jpeg,jpg,png|max:10240",
            "category_id" => "required"
        ];
    }
}
