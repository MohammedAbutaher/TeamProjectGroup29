<nav class="navbar">
    @if (Route::has('login'))
    <div class="nav">
        <a href="{{ url('/') }}">
            <img src="{{asset('images/logo-no-background.png')}}" class="brand-logo" />
        </a>

        <div class="nav-items">
            <ul class="links-container">
<<<<<<< HEAD
                <li class="link-item"><a href="{{('productsnotbtn')}}" class="link">Products</a></li>
                <li class="link-item"><a href="{{('contact_us')}}" class="link">Contact Us</a></li>
                <li class="link-item"><a href="{{('about_us')}}" class="link">About Us</a></li>
                <!-- <li class="link-item"><a href="{{('userlist')}}" class="link">List of CV's</a></li> -->

            </ul>
            <div><a class="iconpad" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{asset('images/user.png')}}" alt=""></a></div>
            <div><a class="iconpad" href="{{('checkoutpage')}}"><img src="{{asset('images/cart.png')}}" alt=""></a></div>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="iconpad" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="{{asset('images/exit.png')}}" id="exit_dimension" alt="">
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
=======
                <li class="link-item"><a href="{{('products')}}" class="link">Products</a></li>
                <li class="link-item"><a href="{{('contact_us')}}" class="link">Contact Us</a></li>
                <li class="link-item"><a href="{{('about_us')}}" class="link">About</a></li>
                <li class="link-item"><a href="{{('userlist')}}" class="link">List of CV's</a></li>

            </ul>
            <div><a class="iconpad" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{asset('images/user.png')}}" alt=""></a></div>
            <div><a class="iconpad" href="{{('basket')}}"><img src="{{asset('images/cart.png')}}" alt=""></a></div>
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
        </div>
    </div>


    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <!-- add Home berore </a> -->
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
        @else
        <!-- <div><a class="iconpad" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{asset('images/user.png')}}" alt=""></a></div> -->
        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> -->

        @if (Route::has('register'))
        <!-- add Register in the next line-->
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
        @endif
        @endauth
    </div>
    @endif

<<<<<<< HEAD
    @guest
                            @if (Route::has('login'))
                                <!-- <li class="nav-item">
                                    add {{ __('Login') }} in the next line before </a> 
                                    <a class="nav-link" href="{{ route('login') }}"></a>
                                </li> -->
                            @endif

                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                     Add  {{ __('Register') }} in the next line before </a>
                                    <a class="nav-link" href="{{ route('register') }}"></a>
                                </li> -->
                            @endif
                        @else
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> -->
                            <!-- </li> -->
                        @endguest
=======
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
</nav>