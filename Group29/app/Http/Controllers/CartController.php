<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;

    class CartController extends Controller
    {
        //Database which will hold the Cart, this is where a user has added a product to there basket but not yet completed their order

        //Display cart database 
        public function create()
        {
            $productsCart = Cart::all(); 
            return view('/checkoutpage', compact('productsCart'));
        }

        //Remove from cart database
        public function remove(REQUEST $request)
        {
            $product = Cart::findOrFail($request->input( key: 'productid'));  //find or fail
            $product->delete();
            return redirect()->back();
        }

        //Add to cart database
        // old code
            public function checkout(Request $request)
            {
                // $add = Products::findOrFail($request->input(key: 'id')); 
                // Cart::add(
                //     $add->name,
                //     $add->image,
                //     $add->quainty_left,
                //     $add->productPrice, 
                //     $add->description,
                // ); 
                //     return redirect()->back();
            $products = Products::findOrFail($request->input( key: 'product_id'));  //find or fail
                $newCart = new Cart(); 
                $newCart->productName = $products->name; 
                $newCart->img_dir = $products->image; 
                $newCart->quantity = 1; 
                $newCart->productPrice = $products->productPrice; 
                $newCart->ingredients = $products->ingredients; 
                $newCart->instructions = $products->instructions; 
                $newCart->save();        
                    // dd($products);
                return redirect()->back();
            }
        }

        //dd($products);
    // old code 
    // new code adds speifically by id 
    // public function checkout(Request $request) 
    // {
    //     $products = Products::findOrFail($request->input( key: 'product_id'));  //find or fail
    //         Cart::create([
    //                     'productName'=>$products->name, 
    //                     'img_dir'=>$products->image, 
    //                     'quantity'=>$products->quainty_left, 
    //                     'productPrice'=>$products->productPrice, 
    //                     'description'=>$products->description,         
    //                ]); 
    //               // dd($products);
    //         return redirect()->back();
    //     }
    //}
    