<?php

namespace App\Listeners;

use App\Events;
use App\Mail\AskForDeveloperMail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailToDeveloper implements ShouldQueue
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
     * @return void
     */
    public function handle(Events\AskForDeveloperEvent $event)
    {
        \Mail::to(config('mail.developer.address'))->send(new AskForDeveloperMail($event->email));
    }
}
