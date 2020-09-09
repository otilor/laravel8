<?php

namespace App\Providers;

use App\Events\AskForDeveloperEvent;
use App\Listeners\SendMailToDeveloper;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        AskForDeveloperEvent::class => [
            SendMailToDeveloper::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
