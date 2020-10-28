<?php

namespace Tests\Feature;

use App\App;
use Tests\TestCase;

class PaymentRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample(): void
    {
        //
    }


    public function testDebitTransaction(): void
    {
        $response = $this->post(App::BASE_ENDPOINT, [
            'name' => 'Gabriel',
            'email' => 'gabrielfemi799@gmail.com',
            'amount' => 3000,
            'description' => 'Payment for DSTV.'
        ]);

        $response->assertStatus(200)
            ->assertExactJson([
                'message' => 'Your transaction has been received and it is being processed.'
            ]);
    }
}
