<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactInfoResource extends JsonResource
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
            'phone' => $this->phone,
            'address' => $this->address,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'tweeter' => $this->tweeter,
            'youtube' => $this->youtube,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
