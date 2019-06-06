<?php

namespace CoderStudios\Listeners;

use Artisan;
use Illuminate\Auth\Events\Logout;

class LoggedOut
{

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        Artisan::call('cache:clear');
    }
}