<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

class CartController extends Controller
{
    //

    // checkout needs to work on a id basis, not adding all things into the databsae
    public function checkout() 
    {
    $products = Products::get(); 
        foreach($products as $key => $value) { 
        Cart::create([
            'productName'=>$value->name, 
            'img_dir'=>$value->image, 
            'quantity'=>$value->quainty_left, 
            'productPrice'=>$value->productPrice, 
            'description'=>$value->description,         
       ]); 
            return redirect()->back();
        }
       //dd($products);
    }
}
