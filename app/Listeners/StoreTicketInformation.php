<?php

namespace App\Listeners;

use App\Payment;
use App\Events\TicketSold;

class StoreTicketInformation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TicketSold  $event
     * @return void
     */
    public function handle(TicketSold $event)
    {
        $laravel_event  = $event;
        $eventile_event = $laravel_event->event;

        $eventile_event->decrement('ticket_remaining', $laravel_event->ticket_count);

        $eventile_event->tickets()->create(['user_id'=>auth()->id(), 'ticket_count'=>$laravel_event->ticket_count]);

        $eventile_event->payments()->save(new Payment([
            'payment_id' => $laravel_event->payment_id,
            'amount'     => $laravel_event->amount,
            'user_id'    => auth()->id(),
        ]));
    }
}
