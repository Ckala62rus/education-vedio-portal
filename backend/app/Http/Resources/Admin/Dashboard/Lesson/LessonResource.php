<?php

namespace App\Http\Resources\Admin\Dashboard\Lesson;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'text' => $this->text,
            'category_id' => $this->category_id,
            'category_name' => $this->category ? $this->category->name : null,
            'is_publish' => $this->is_publish,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d'),
            'preview' => $this->preview
        ];
    }
}
