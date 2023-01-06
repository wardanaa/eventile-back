<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
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
            'ticket_count' => $this->ticket_count,
            'event'        => new EventResource($this->event),
            'created_at'   => $this->created_at->format('d M, Y'),
        ];
    }
}
