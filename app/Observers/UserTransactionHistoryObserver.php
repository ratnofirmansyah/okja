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
     * Handle the user transaction history "updating" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function updating(UserTransactionHistory $userTransactionHistory)
    {
        $userTransactionHistoryPrevious = UserTransactionHistory::find($userTransactionHistory->id);
        \Log::error($userTransactionHistoryPrevious->qty);
        \Log::error($userTransactionHistory->qty);
        \Log::error($userTransactionHistory->qty);
        $currentQty = intval($userTransactionHistory->qty) - intval($userTransactionHistoryPrevious->qty);
        $deductProductQty = Product::find($userTransactionHistory->product_id);
        $deductProductQty->qty_balance -= $currentQty;
        if ($deductProductQty->qty_balance < 0) {
            $deductProductQty->qty_balance = 0;
        }
        $deductProductQty->save();
    }

    /**
     * Handle the user transaction history "deleted" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function deleted(UserTransactionHistory $userTransactionHistory)
    {
        $deductProductQty = Product::find($userTransactionHistory->product_id);
        $deductProductQty->qty_balance += $userTransactionHistory->qty;
        if ($deductProductQty->qty_balance < 0) {
            $deductProductQty->qty_balance = 0;
        }
        $deductProductQty->save();
    }
}
