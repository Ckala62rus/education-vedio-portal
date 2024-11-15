<?php

namespace App\Http\Resources\Admin\Dashboard\Role;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AllRolesResource extends JsonResource
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
            'name' => $this->name,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated_at' =>  Carbon::parse($this->updated_at)->format('Y-m-d'),
        ];
    }
}
