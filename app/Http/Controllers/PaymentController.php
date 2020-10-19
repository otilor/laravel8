<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    public function debit(): JsonResponse
    {
        (new Payment())->debit(9, 422);

        return response()->json(['message' => 'Your transaction has been received and it is being processed.']);
    }
}
