<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <title>Homepage</title>
</head>


<body>
    <header>

        @include('layouts/nav')
    </header>
    
    <div class="hero-section">
        <div class="content">
            <img src="{{asset('images/logo-no-background.png')}}" class="logo" alt="">
            <p class="sub-heading">Fresh Food Delivered To Your Door</p>
        </div>
    </div>
    <br>
    <div class="textbox">
        <h1>Recipe2Go</h1>
        <br>
        <br>
        <p class="sub-title-description">Welcome to our website Recipe2Go you may be asking your self
            what is this website well let me tell you this website offers customers
            to buy recipe delivery boxes
            of pre-packaged meals to cook at home with the ingredients listed out.</p>
    </div>


    <br>
    <div class="style_box">
        <br>
        <h2 class="sub-title">Why You Should Stay</h2>
        <br>
        <p class="sub-title-description"> Recipe2Go offers customers a wide variety of meals with the ingredients and the recipe, we offer the freshes
            ingredients from the market that will be used by you the customers making
            the experince much more enjoyable.
        </p>
        <br>
    </div>

    <br>
    <br>

    <div class="style_box">
        <br>
        <h2 class="sub-title">What We Promise!</h2>
        <br>
        <p class="sub-title-description">We from Recipe2Go here by promise to always keep our ingredients as fresh as possible! </p>
        <br>
    </div>

    <br>
    <br>

    <div class="style_box">
        <br>
        <h2 class="sub-title">The Future Of Recipe2Go</h2>
        <br>
        <p class="sub-title-description">You may be asking what will be the future of Recipe2Go, well let
            me tell you once we have branched out to a wide audience
            we plan to add even more meals better suited for people needs
            this means people with health concerns will not be ignored.
        </p>
        <br>
    </div>

    <br>
    <br>
    <div class="style_box">
        <br>
        <h2 class="sub-title">Why Not Have A Browse</h2>
        <br>
        <p class="sub-title-description">If your still here why not have a look at our products click <a href="{{('products')}}">"HERE"</a> to
            find out more.
        </p>
        <br>
    </div>
    <br>
    <br>

    @include('layouts/footer')
</body>

</html>