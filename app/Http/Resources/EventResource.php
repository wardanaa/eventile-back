<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'name'             => $this->name,
            'slug'             => $this->slug,
            'description'      => $this->description,
            'address'          => $this->address,
            'ticket_price'     => $this->ticket_price,
            'ticket_remaining' => $this->ticket_remaining,
            'date'             => $this->date,
            'published_at'     => $this->published_at,
            'image'            => asset(str_replace('public', 'storage', $this->image)),
        ];
    }
}
