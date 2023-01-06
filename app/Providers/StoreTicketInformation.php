<?php

namespace App\Providers;

use App\Providers\TicketSold;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        //
    }
}
