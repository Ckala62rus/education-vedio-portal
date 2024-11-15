<?php

namespace App\Http\Requests\Admin\Dashboard\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class LessonStoreRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'text' => 'required|string',
            'category_id' => 'integer|nullable',
            'preview' => 'file|image|nullable',
            'is_publish' => 'nullable',
        ];
    }
}
