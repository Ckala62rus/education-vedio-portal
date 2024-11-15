<?php

namespace App\Http\Requests\Admin\Dashboard\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:App\Models\User,email',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Введите подтверждение пароля',
            'password.required' => 'Пароль обязателен',
        ];
    }
}
