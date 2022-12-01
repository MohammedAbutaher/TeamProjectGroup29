<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Index</title>

    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">


</head>

<body>
    <header>

        @include('layouts/nav')

    </header>
    <h1>
        Our Products
    </h1>
    <br>
    <section class="product-list">
        <div>


        </div>
        <div class="product-container">
            <div class="card">
                <div class="title">Seafood Spaghetti</div>
                <a href="SpaghettiPage.html">
                    <img class="recipeimg" alt="seafood spaghetti" src="{{asset('images/Spaghetti.png')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Lasagne</div>
                <a href="Lasagna.html">

                    <img class="recipeimg" alt="Lasagna" src="{{asset('images/Lasagna.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Beef and Bean Tacos</div>
                <a href="tacos.html">

                    <img class="recipeimg" alt="Lasagna" src="{{asset('images/Tacos With Beef and Beans.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Grilled Beef Steak</div>
                <a href="steak.html">

                    <img class="recipeimg" alt="Grilled beef steak" src="{{asset('images/Grilled Beef Steaks.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Cajun Chicken Alfredo Pasta</div>
                <a href="pasta.html">

                    <img class="recipeimg" alt="CAJUN CHICKEN ALFREDO PASTA" src="{{asset('images/Pasta.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Mushroom Soup</div>
                <a href="soup.html">

                    <img class="recipeimg" alt="MUSHROOM SOUP" src="{{asset('images/Mushroom Soup.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Chocolate Lava Cake</div>
                <a href="cake.html">

                    <img class="recipeimg" alt="CHOCOLATE LAVA CAKE" src="{{asset('images/Lava Cake.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Blueberry Muffin's</div>
                <a href="muffin.html">

                    <img class="recipeimg" alt="BLUEBERRY MUFFINS" src="{{asset('images/Blueberry Muffins.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Fudgy Cocoa Browines</div>

                    <img class="recipeimg" alt="FUDGY COCOA BROWNIES" src="{{asset('images/Brownie.jpg')}}">

                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
        </div>
    </section>
    @include('layouts/footer')

</body>

</html>