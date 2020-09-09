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
        $customer = new User(['name' => 'Gabriel', 'email' => 'gabrielfemi799@gmail.com', 'password' => bcrypt('password')]);
        event(new AskForDeveloperEvent($customer));
    }
}
