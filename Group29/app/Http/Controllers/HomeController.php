<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\users;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

use App\Models\Products;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == '1') {
            $users = User::all();
            return view('/userlist', compact('users'));
        } else {

            // $productsCart = Cart::all();
            // return view('/checkoutpage', compact('productsCart'));
            
            $products = Products::all(); 
            return view('/products', compact('products'));
        }
    }
}
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\users;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

use App\Models\Products;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == '1') {
            $users = User::all();
            return view('/userlist', compact('users'));
        } else {

            // $productsCart = Cart::all();
            // return view('/checkoutpage', compact('productsCart'));
            
            $products = Products::all(); 
            return view('/products', compact('products'));
        }
    }
}
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
