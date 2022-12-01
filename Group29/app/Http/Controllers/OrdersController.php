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
    $products = Cart::findOrFail($request->input( key: 'order'));  //find or fail 
        $newOrder = new Orders();
            $newOrder->productName = $products->productName; 
            $newOrder->img_dir = $products->img_dir; 
            $newOrder->quantity = $products->quantity; 
            $newOrder->productPrice = $products->productPrice; 
            $newOrder->ingredients = $products->ingredients; 
            $newOrder->instructions = $products->instructions;
            $newOrder->save();
            // dd($newOrder);
            $products->truncate();         
            return redirect()->back();

    // // creation
    // $products = Cart::all();  //find or fail 
    //     $id = Cart::find($request->input( key: 'order')); 
    //     $newOrder = new Orders();
    //     $newOrder->productName = $products['productName']; 
    //                 $newOrder->img_dir = $products['img_dir'];   
    //                 $newOrder->quantity = $products['quantity']; 
    //                 $newOrder->productPrice = $products['productPrice']; 
    //                 $newOrder->ingredients = $products['ingredients']; 
    //                 $newOrder->instructions = $products['instructions']; 
    //     $newOrder->save();
         
    //         // delete cart 
    //                 //dd($products);
    //                 $products->truncate();         
    //                 return redirect()->back();
                
        }
    }

// 1ST ATTEMPT
// public function order(REQUEST $request) 
// {
//     // creation
//     $products = Cart::findOrFail($request->input( key: 'order'));  //find or fail 
//         Orders::create([
//                     'productName'=>$product->productName, 
//                     'img_dir'=>$product->img_dir, 
//                     'quantity'=>$product->quantity, 
//                     'productPrice'=>$product->productPrice, 
//                     'ingredients'=>$product->ingredients, 
//                     'instructions'=>$product->instructions,  
//                ]); 
// // delete cart 
//         //dd($products);
//         $products->truncate();         
//         return redirect()->back();
//     }
// }

// 2ND
// public function order(REQUEST $request) 
// {
//     // creation
//     $products = Cart::findOrFail($request->input( key: 'order'))->toArray();  //find or fail 
//     $newOrder = new Orders();
//         $newOrder->productName = $products->productName; 
//         $newOrder->img_dir = $products->img_dir; 
//         $newOrder->quantity = $products->quantity; 
//         $newOrder->productPrice = $products->productPrice; 
//         $newOrder->ingredients = $products->ingredients; 
//         $newOrder->instructions = $products->instructions;
//         $newOrder->save();
// // delete cart 
//         //dd($products);
//         $products->truncate();
               
//         return redirect()->back();
//     }
// }

// 3RD 
// public function order(REQUEST $request) 
// {
//     // creation
//     $itartor = Cart::all(); 
//     foreach ($itartor as $i) { 
//         $products = Cart::find($request->input( key: 'order'))->toArray();  //find or fail 
//         $id = Cart::find($request->input( key: 'order'));
//         $newOrder = new Orders();
//             $newOrder->productName = $products['productName']; 
//             $newOrder->img_dir = $products['img_dir']; 
//             $newOrder->quantity = $products['quantity']; 
//             $newOrder->productPrice = $products['productPrice']; 
//             $newOrder->ingredients = $products['ingredients']; 
//             $newOrder->instructions = $products['instructions']; 
//     }
//     dd($products);
//         $newOrder->save();
//         $newOrder->save()->saveMany($products);
//             // delete cart 
//             //dd($products);
//             $id->truncate();            
//             return redirect()->back();
//         }
//     }