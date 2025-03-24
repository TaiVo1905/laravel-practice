<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            "email" => "required|email",
            "your_last_name" => "required|string|max:255",
            "password" => "required|string",
            "rePw" => "required|same:password",
        ];
    }

    public function messages (): array
    {
        return [
            "email.email" => "You need fill your email.",
            "your_last_name.string" => "You need fill your name.",
            "password.string" => "You need fill your password.",
            "rePw.string" => "You need fill your re-password."
        ];
    }
}
