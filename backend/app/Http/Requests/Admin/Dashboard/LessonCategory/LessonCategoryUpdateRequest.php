<?php

namespace App\Http\Requests\Admin\Dashboard\LessonCategory;

use App\Models\LessonCategory;
use Illuminate\Foundation\Http\FormRequest;

class LessonCategoryUpdateRequest extends FormRequest
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
            'name' => 'required|unique:' . LessonCategory::class . ',name,' . $this->route('id'),
            'description' => 'nullable|max:255|string'
        ];
    }
}
