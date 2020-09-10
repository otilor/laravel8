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
        $email = 'femi.adesina@gmail.com';
        AskForDeveloperEvent::dispatch($email);
        return response('Successfuly notified developer you checked on him.');
    }
}
