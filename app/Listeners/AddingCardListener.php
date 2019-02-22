<?php

namespace App\Listeners;

use App\Events\AddingToCardEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddingCardListener
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
        app('log')->info('new package created');
    }
}
