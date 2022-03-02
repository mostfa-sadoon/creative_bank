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
            'ideaRate' => $this->ideaRate."_" . app()->getLocale(),
            'ideaStudy' => $this->ideaStudy."_" . app()->getLocale(),
            'acceptedIdea' => $this->acceptedIdea."_" . app()->getLocale(),
            'vision' => $this->vision."_" . app()->getLocale(),
            'mission' => $this->mission."_" . app()->getLocale(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
}
}