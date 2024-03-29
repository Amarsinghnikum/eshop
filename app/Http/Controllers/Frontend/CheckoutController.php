<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

class CheckoutController extends Controller
{
    public function index()
    {
        $old_cartitems = Cart::all();
        foreach($old_cartitems as $item)
        {
            if(!Product::where('id', $item->prod_id)->where('qty','>=',$item->prod_qty)->exists())
            {
               $removeItem = Cart::where('prod_id', $item->prod_id)->first();
               $removeItem->delete();
            }
        }
        $cartitems = Cart::all();
        return view('frontend.checkout',compact('cartitems'));
    }
}
