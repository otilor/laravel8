<?php


namespace App;


use App\Models\Account;
use App\Models\User;

class Payment
{
    /**
     * @var Account
     */
    private Account $account;

    public function __construct()
    {
        //
    }

    public function debit($user_id, $amount)
    {
        // Fetch the balance.
        $account = Account::findUser($user_id);
        // Subtract from the amount.
        $newBalance = $account->balance - $amount;

        // Update database
        $account->update([
            'balance' => $newBalance,
        ]);

    }
}
