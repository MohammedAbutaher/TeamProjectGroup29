<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated() 
    {
        if(Auth::user()->role == '1') // 1 is a admin 
        {
            return redirect('/home')->with('status', 'Welcome to admin page'); // redirect(display) if user is admin 
        }
        else if(Auth::user()->role == '0') // 0 is a normal user
        {
            return redirect('/home')->with('status', 'Welcome user'); // redirect(display) if user is not 
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
=======
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated() 
    {
        if(Auth::user()->role == '1') // 1 is a admin 
        {
            return redirect('/home')->with('status', 'Welcome to admin page'); // redirect(display) if user is admin 
        }
        else if(Auth::user()->role == '0') // 0 is a normal user
        {
            return redirect('/home')->with('status', 'Welcome user'); // redirect(display) if user is not 
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
