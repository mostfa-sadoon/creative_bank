<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class newsHome extends JsonResource
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
            'desc'=> $this->desc,
            'header' => $this->header,
            'img' => $this->img,
            'created_at' => $this->created_at,
        ];
    }
}
