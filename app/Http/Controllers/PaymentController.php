<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    public function debit(): JsonResponse
    {
        return response()->json(['message' => 'Your transaction has been received and it is being processed.']);
    }
}
