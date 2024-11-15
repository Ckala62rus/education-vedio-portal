<?php

namespace App\Http\Requests\Admin\Dashboard\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'name' => ['string', 'max:255'],
//            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'email' => 'email|max:255|unique:' . User::class . ',email,' . $this->route('id'),
            'role_id' => 'required|int',
        ];
    }
}
