<?php

namespace App\Http\Resources\Admin\Dashboard\Lesson;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonsAllResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'is_publish' => $this->is_publish,
            'category_name' => $this->category ? $this->category->name : null,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d'),
            'preview' => $this->preview
        ];
    }
}
