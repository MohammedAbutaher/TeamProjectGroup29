<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <title>Homepage</title>
</head>


<body>
    <header>
        <nav class="navbar">
            <div class="nav">
                <a href="index.html"><img src="img/logo-no-background.png" class="brand-logo" alt=""></a>
                <div class="nav-items">
                    <ul class="links-container">
                        <li class="link-item"><a href="{{('products')}}" class="link">Products</a></li>
                        <li class="link-item"><a href="{{('contact_us')}}" class="link">Contact</a></li>
                        <li class="link-item"><a href="{{('about_us')}}" class="link">About</a></li>
                    </ul>
                    <div><a class="iconpad" href="#"><img src="img/user.png" alt=""></a></div>
                    <div><a class="iconpad" href="#"><img src="img/cart.png" alt=""></a></div>
                </div>
            </div>

            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif

        </nav>

    </header>
    <div class="hero-section">
        <div class="content">
            <img src="img/logo-no-background.png" class="logo" alt="">
            <p class="sub-heading">Fresh Food Delivered To Your Door</p>
        </div>
    </div>
    <div class="textbox">
        <h1>Recipe2Go</h1>
        <p>Welcome to our website Recipe2Go you may be asking your self
            what is this website well let me tell you this website offers customers
            to buy recipe delivery boxes
            of pre-packaged meals to cook at home with the ingredients listed out.</p>
    </div>



    <br>
    <h2>Why You Should Stay</h2>

    <p> Recipe2Go offers customers a wide variety of meals with the ingredients and the recipe, we offer the freshes
        ingredients from the market that will be used by you the customers making
        the experince much more enjoyable.
    </p>
    <br>
    <h2>What We Promise!</h2>
    <p>We from Recipe2Go here by promise to always keep our ingredients as fresh as possible! </p>
    <br>
    <h2>The Future Of Recipe2Go</h2>
    <p>You may be asking what will be the future of Recipe2Go, well let
        me tell you once we have branched out to a wide audience
        we plan to add even more meals better suited for people needs
        this means people with health concerns will not be ignored.
    </p>
    <br>
    <h2>Why Not Have A Browse</h2>
    <p>If your still here why not have a look at our products click <a href="./company_products.html">"HERE"</a> to
        find out more. </p>
    <br>

    <footer>
        <div id="footer_flex">
            <div>
                <!--<link to different pages >-->
                <h4>Pages</h4>
                <blockquote>
                    <a href="{{('products')}}" class="footer_pages">Products</a>
                    <br>
                    <a href="{{('contact_us')}}" class="footer_pages">Contact</a>
                    <br>
                    <a href="{{('about_us')}}" class="footer_pages">About</a>
                </blockquote>
            </div>
            <div>
                <!--<links to my difgferent social media >-->
                <h4>Socials</h4>

                <a href="https://twitter.com/?lang=en" target="_blank" class="twitter">
                    <img src="img/twitter_small.png" alt="" class="footer_images">
                </a>


                <a href="https://github.com/" target="_blank" class="twitter">
                    <img src="img/github-sign_small.png" alt="" class="footer_images">
                </a>


                <a href="https://uk.linkedin.com/" target="_blank" class="twitter">
                    <img src="img/linkedin_small.png" alt="" class="footer_images">
                </a>
            </div>
        </div>
        <!--< creator of the page>-->
        <p class="footer_line1"><a href="" class="autoemail">Recipes2Go</a>
            &copy; 2022</p>
    </footer>
</body>







</html>