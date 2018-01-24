<?php

namespace App\Listeners;

use App\Confirmation;
use App\Events\Event;

class UpdateServerAdminList
{
    /**
     * Create the event listener.
     *
     * @return void|mixed
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        Confirmation::syncServer();
    }
}
