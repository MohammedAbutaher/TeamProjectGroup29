<nav class="navbar">
    @if (Route::has('login'))
    <div class="nav">
        <a href="{{ url('/') }}">
            <img src="{{asset('images/logo-no-background.png')}}" class="brand-logo" />
        </a>

        <div class="nav-items">
            <ul class="links-container">
                <li class="link-item"><a href="{{('products')}}" class="link">Products</a></li>
                <li class="link-item"><a href="{{('contact_us')}}" class="link">Contact</a></li>
                <li class="link-item"><a href="{{('about_us')}}" class="link">About</a></li>
            </ul>
            <div><a class="iconpad" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><img src="{{asset('images/user.png')}}" alt=""></a></div>
            <div><a class="iconpad" href="{{('basket')}}"><img src="{{asset('images/cart.png')}}" alt=""></a></div>
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

</nav>