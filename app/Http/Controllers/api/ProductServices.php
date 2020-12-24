<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductServices extends Controller
{
    public function getList(Request $request)
    {
        $data = '<option></option>';

        if ($request->input('outlet_id')) {
            $products = Product::where('outlet_id', $request->input('outlet_id'))->where('qty_balance', '>', 0)->get();
            foreach ($products as $key => $product) {
                $data .= '<option value="'; $data .= $product->id; $data .='">'; $data .=$product->name; $data .='</option>';
            }
        }

        return $data;
    }
}
