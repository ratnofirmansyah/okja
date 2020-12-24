<?php

namespace App\Observers;

use App\Models\UserTransactionHistory;
use App\Models\Product;

class UserTransactionHistoryObserver
{
    /**
     * Handle the user transaction history "created" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function created(UserTransactionHistory $userTransactionHistory)
    {
        $deductProductQty = Product::find($userTransactionHistory->product_id);
        $deductProductQty->qty_balance -= $userTransactionHistory->qty;
        if ($deductProductQty->qty_balance < 0) {
            $deductProductQty->qty_balance = 0;
        }
        $deductProductQty->save();
    }

    /**
     * Handle the user transaction history "updated" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function updated(UserTransactionHistory $userTransactionHistory)
    {
        //
    }

    /**
     * Handle the user transaction history "deleted" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function deleted(UserTransactionHistory $userTransactionHistory)
    {
        //
    }

    /**
     * Handle the user transaction history "restored" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function restored(UserTransactionHistory $userTransactionHistory)
    {
        //
    }

    /**
     * Handle the user transaction history "force deleted" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function forceDeleted(UserTransactionHistory $userTransactionHistory)
    {
        //
    }
}
