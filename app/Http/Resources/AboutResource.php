<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'ideaRate' => $this->ideaRate,
            'ideaStudy' => $this->ideaStudy,
            'acceptedIdea' => $this->acceptedIdea,
            'vision' => $this->vision,
            'mission' => $this->mission,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
}
}