<?php

namespace Code\Listeners;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;

class LoggedIn
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();
    }
}