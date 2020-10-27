<?php

use App\Jobs\ProcessPayment;
use App\Jobs\SendDummyMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('ask-for-developer', Controllers\DeveloperController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('dummy-mail', function () {
    SendDummyMail::dispatch();
    return response('Your mail has been sent');
});

Route::get('process-payment', function () {
   ProcessPayment::dispatch()->onQueue('payments');
   return response('Your payment is being processed!');
});
