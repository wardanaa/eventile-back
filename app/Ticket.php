<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'event_id', 'ticket_count'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
