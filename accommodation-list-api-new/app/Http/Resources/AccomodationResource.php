<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccomodationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
        'name' => $this->name,
        'rating' => $this->rating,
        'category' => $this->category,
        'image' => $this->image,
        'reputation' => $this->reputation,
        'reputationBadge' => $this->reputationBadge,
        'price' => $this->price,
        'availability' => $this->availability,
        'location' => $this->location,
      ];
    }
}

