<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\UserTransactionHistory;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        $inTransaction = new UserTransactionHistory();
        $inTransaction->product_id  = $product->id;
        $inTransaction->action      = 'in';
        $inTransaction->user_id     = auth()->user()->id;
        $inTransaction->outlet_id   = $product->outlet_id;
        $inTransaction->qty         = $product->qty_total;
        $inTransaction->note        = 'automatic transaction after add product';
        $inTransaction->save();
    }

}
