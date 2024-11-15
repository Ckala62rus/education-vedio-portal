<?php

namespace App\Http\Requests\Admin\Dashboard\Role;

use Illuminate\Foundation\Http\FormRequest;

class RoleCreateRequest extends FormRequest
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
            'role' => 'required|array',
            'role.name' => 'required|string|max:255',
            'permission' => 'sometimes|array',
        ];
    }
}
