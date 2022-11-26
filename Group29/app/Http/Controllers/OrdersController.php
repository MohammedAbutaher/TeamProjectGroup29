<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Cart;



class OrdersController extends Controller
{

    //This controlls the ordres database, to finilze the orders
   

    public $message = ''; 
    //
    public function order(REQUEST $request) 
    {
        // creation
        $products = Cart::findOrFail($request->input( key: 'order'));  //find or fail 
        foreach($products as $product) {
            Orders::create([
                        'productName'=>$products->productName, 
                        'img_dir'=>$products->img_dir, 
                        'quantity'=>$products->quantity, 
                        'productPrice'=>$products->productPrice, 
                        'description'=>$products->Description,         
                   ]); 
            }
    // delete cart 
            //dd($products);
            $products->truncate();
                   
            return redirect()->back();
        }
}


    // public function order(REQUEST $request) 
    // {
    //     // creation
    //     $product = Cart::find($request->input( key: 'order'));  //find or fail                
    //         Orders::create([
    //                     'productName'=>$products->productName, 
    //                     'img_dir'=>$products->img_dir, 
    //                     'quantity'=>$products->quantity, 
    //                     'productPrice'=>$products->productPrice, 
    //                     'description'=>$products->Description,         
    //                ]); 
    // // delete cart database
    //         $products->truncate();
    //         
    //         return redirect()->back();
    //     }
    // }