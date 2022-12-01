<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //Controller for the database which will hold the products
    //Display
    public function show($id){
        $products = Products::find($id);
        return view('/products', array('product' => $products));
    }
    //Return
    public function list(){
        return view('/products', array('products'=>Products::all()));
    }
    
    public function createProducts(){
        $products = Products::all(); 
        return view('/products', compact('products'));
    }

    public function productsNoButton(){
        $products = Products::all(); 
        return view('/productsnotbtn', compact('products'));
    }

    // OLD CODE
    // //Creation
    // public function create()
    // {
    //     $photos = Products::all(); 
    //     return view('/products', compact('photos'));
    // }
    // OLD CODE

    //Stored
    public function store(Request $request)
    {
      $name = $request->file('image')->getClientOriginalName(); 
      $size = $request->file('image')->getSize(); 
      $request->file('image')->storeAs('public/images/', $name); // 'public/images/'
      $photo = new Products(); 
      $photo->image = $name; 
      $photo->name = $request->name; 
      $photo->size = $size;
      $photo->quainty_left = $request->quainty; 
      $photo->productPrice = $request->productPrice; 
      $photo->ingredients = $request->ingredients; 
      $photo->instructions = $request->instructions; 
      $photo->save();
      return redirect()->back(); 
    }
}

//         OLD CODE 


//         //Display
//         public function show($id){
//             $products = Products::find($id);
//             return view('/basket', array('product' => $products));
//         }
//         //Return
//         public function list(){
//             return view('/basket', array('products'=>Products::all()));
//         }
        
//         public function createProducts(){
//             $products = Products::all(); 
//             return view('/products', compact('products'));
//         }
//         //Creation
//         public function create()
//         {
//             $photos = Products::all(); 
//             return view('/basket', compact('photos'));
//         }
//         //Stored
//         public function store(Request $request)
//         {
//           $name = $request->file('image')->getClientOriginalName(); 
//           $size = $request->file('image')->getSize(); 
//           $request->file('image')->storeAs('public/images/', $name); // 'public/images/'
//           $photo = new Products(); 
//           $photo->image = $name; 
//           $photo->name = $request->name; 
//           $photo->size = $size;
//           $photo->quainty_left = $request->quainty; 
//           $photo->productPrice = $request->productPrice; 
//           $photo->ingredients = $request->ingredients; 
//           $photo->instructions = $request->instructions; 
//           $photo->save();
//           return redirect()->back(); 
//         }
// }
