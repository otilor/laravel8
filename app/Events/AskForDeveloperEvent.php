<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AskForDeveloperEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        //
        $this->email = $email;
    }
}
