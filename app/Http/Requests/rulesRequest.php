<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rulesRequest extends FormRequest
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
            "name" => "required|string|max:255",
            "age" => "required|numeric",
            "date" => "required|string",
            "phone" => "required|numeric",
            "web" => "required|string",
            "address" => "required|string"
        ];
    }

    public function messages (): array
    {
        return [
            "name.string" => "You need fill your name.",
            "age.string" => "You need fill your age.",
            "date.string" => "You need fill your birthday.",
            "phone.numeric" => "You need fill your phone.",
            "web.string" => "You need fill your web.",
            "address.string" => "You need fill your address."
        ];
    }
}
