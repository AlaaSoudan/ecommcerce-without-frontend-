<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Function_;

class cartController extends Controller
{
    public function addproduct(Request $request)
    {
        $products_id = $request->input('prod_id');
        $products_qty = $request->input('prod_qty');
        if (Auth::check()) {
            $prod_check = Product::where('id', $products_id)->first();
            if ($prod_check) {

                if (cart::where('prod_id', $products_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['status' => $prod_check->name . "already added to cart"]);
                } else {
                    $cartitem = new cart();
                    $cartitem->prod_id = $products_id;
                    $cartitem->user_id = Auth::id();
                    $cartitem->prod_qty = $products_qty;
                    $cartitem->save();
                    return response()->json(['status' => $prod_check->name . "added to cart"]);
                }
            } else {
                return response()->json(['status' => "login to continue"]);
            }
        }
    }
}
