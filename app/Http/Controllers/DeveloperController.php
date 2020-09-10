<?php

namespace App\Http\Controllers;

use App\Events\AskForDeveloperEvent;
use App\Models\User;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        AskForDeveloperEvent::dispatch(config('mail.client.address'));
        return response('Successfully notified developer you checked on him.');
    }
}
