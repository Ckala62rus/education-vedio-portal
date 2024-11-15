<?php

namespace App\Http\Resources\Admin\Dashboard\Role;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleByIdResource extends JsonResource
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
            'name' => $this->name,
            'permissions' => $this->permissions->pluck('id'),
        ];
    }
}
