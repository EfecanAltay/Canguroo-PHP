<?php

namespace App\Listeners;

use App\Events\AddingToCardEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddingToCardListener
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
     * @param  AddingToCardEvent  $event
     * @return void
     */
    public function handle(AddingToCardEvent $event)
    {
        //
    }
}
