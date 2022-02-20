<?php

namespace App\Listeners;

use App\Events\RegisterEventMail;
use App\Mail\RegisterMailNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterHandlerMail
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
     * @param  object  $event
     * @return void
     */
    public function handle(RegisterEventMail $event)
    {
        //
        Mail::to($event->email)
              ->send(new RegisterMailNotification());


    }
}
