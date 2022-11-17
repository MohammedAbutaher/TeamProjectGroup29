<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;


// Add to basket controller
class OrdersController extends Controller
{
    public $message = ''; 
    //
    public function checkout() 
    {
        $cart = Orders::get();   // 'user_id', auth()->id()->get()
        foreach($cart as $cartProduct) 
        {
            $product == Product::find(Products::find($cartProduct->id)); 
            if (!$product || $product->quainty < $cartProduct->quainty) {
                $this->message = $cartProduct->product->name. 'is currently out of stock'; 
            }

        }

        //dd($products);
    }
}
