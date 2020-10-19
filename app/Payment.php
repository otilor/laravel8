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

    public function debit($user_id, $amount) : bool
    {
        $account = Account::findUser($user_id);
        $newBalance = $account->balance - $amount;

        $account->update([
            'balance' => $newBalance,
        ]);

        return true;
    }
}
