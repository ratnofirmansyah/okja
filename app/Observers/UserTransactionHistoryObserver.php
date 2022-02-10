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
    public function creating(UserTransactionHistory $userTransactionHistory)
    {
        $productQty = Product::find($userTransactionHistory->product_id);
        if ($userTransactionHistory->action == 'out') {
            $productQty->qty_balance -= $userTransactionHistory->qty;
            if ($productQty->qty_balance < 0) {
                $productQty->qty_balance = 0;
            }
        }elseif ($userTransactionHistory->action == 'in') {
            if ($userTransactionHistory->note != 'automatic transaction after add product') {
                $productQty->qty_total += $userTransactionHistory->qty;
            }
            $productQty->qty_balance += $userTransactionHistory->qty;
        }
        $productQty->save();
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
        $productQty = Product::find($userTransactionHistory->product_id);
        if ($userTransactionHistory->action == 'out') {
            if ($userTransactionHistoryPrevious->action == 'in') {
                $productQty->qty_total -= $userTransactionHistoryPrevious->qty;
                $productQty->qty_balance -= $userTransactionHistoryPrevious->qty+$userTransactionHistory->qty;
            }elseif ($userTransactionHistoryPrevious->action == 'out') {
                $currentQty = intval($userTransactionHistory->qty) - intval($userTransactionHistoryPrevious->qty);
                $productQty->qty_balance -= $currentQty;
                if ($productQty->qty_balance < 0) {
                    $productQty->qty_balance = 0;
                }
            }
        }elseif ($userTransactionHistory->action == 'in') {
            if ($userTransactionHistoryPrevious->action == 'out') {
                $productQty->qty_total += $userTransactionHistoryPrevious->qty+$userTransactionHistory->qty;
                $productQty->qty_balance += $userTransactionHistoryPrevious->qty+$userTransactionHistory->qty;
            }elseif ($userTransactionHistoryPrevious->action == 'in') {
                $currentQty = intval($userTransactionHistory->qty) - intval($userTransactionHistoryPrevious->qty);
                $productQty->qty_total += $currentQty;
                $productQty->qty_balance += $currentQty;
            }
        }
        $productQty->save();
    }

    /**
     * Handle the user transaction history "deleted" event.
     *
     * @param  \App\Models\UserTransactionHistory  $userTransactionHistory
     * @return void
     */
    public function deleted(UserTransactionHistory $userTransactionHistory)
    {
        $productQty = Product::find($userTransactionHistory->product_id);
        if ($userTransactionHistory->action == 'out') {
            $productQty->qty_balance += $userTransactionHistory->qty;
        }elseif ($userTransactionHistory->action == 'in') {
            $productQty->qty_balance -= $userTransactionHistory->qty;
            if ($productQty->qty_balance < 0) {
                $productQty->qty_balance = 0;
            }
        }
        $deductProductQty->save();
    }
}
