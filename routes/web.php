<?php

use App\Http\Controllers\TestAutoloadController;
use App\Jobs\ProcessPayment;
use App\Jobs\SendDummyMail;
use Facades\EmailFacade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use PHPUnit\Util\Test;

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
Route::get('test', TestAutoloadController::class);
Route::get('test-mail', function () {
    EmailFacade::to('gabrielfemi799@gmail.com');
});
Route::get('test-static-fallback', function () {
    return TestAutoloadController::lever();
});

Route::get('dummy', function () {
    return "You said 'Hi'";
});
