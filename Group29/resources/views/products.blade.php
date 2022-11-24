<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Index</title>

    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

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

        </nav>

    </header>
    <br>
    <section class="product-list">
        <div>
            <h1>
                Our Products
            </h1>
        </div>
        <div class="product-container">
            <div class="card">
                <div class="title">Seafood Spaghetti</div>
                <a href="SpaghettiPage.html">
                    <img class="recipeimg" alt="seafood spaghetti" src="img/Spaghetti.png">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Lasagne</div>
                <a href="Lasagna.html">
                    <img class="recipeimg" alt="Lasagna" src="img/Lasagna.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Beef and Bean Tacos</div>
                <a href="tacos.html">
                    <img class="recipeimg" alt="Lasagna" src="img/Tacos With Beef and Beans.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Grilled Beef Steak</div>
                <a href="steak.html">
                    <img class="recipeimg" alt="Grilled beef steak" src="img/Grilled Beef Steaks.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Cajun Chicken Alfredo Pasta</div>
                <a href="pasta.html">
                    <img class="recipeimg" alt="CAJUN CHICKEN ALFREDO PASTA" src="img/Pasta.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Mushroom Soup</div>
                <a href="soup.html">
                    <img class="recipeimg" alt="MUSHROOM SOUP" src="img/Mushroom Soup.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Chocolate Lava Cake</div>
                <a href="cake.html">
                    <img class="recipeimg" alt="CHOCOLATE LAVA CAKE" src="img/Lava Cake.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Blueberry Muffin's</div>
                <a href="muffin.html">
                    <img class="recipeimg" alt="BLUEBERRY MUFFINS" src="img/Blueberry Muffins.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
            <div class="card">
                <div class="title">Fudgy Cocoa Browines</div>
                <a href="brownie.html">
                    <img class="recipeimg" alt="FUDGY COCOA BROWNIES" src="img/Brownie.jpg">
                    <div class="text">Click to see more</div>
                </a>
                <div class="buy-button">Add to cart</div>

            </div>
        </div>

        <footer>
            <div id="footer_flex">
                <div>
                    <!--<link to different pages >-->
                    <h4>Pages</h4>
                    <blockquote>
                        <a href="products.html" class="footer_pages">Products</a>
                        <br>
                        <a href="contact us.html" class="footer_pages">Contact Us</a>
                        <br>
                        <a href="about us.html" class="footer_pages">About Us</a>
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