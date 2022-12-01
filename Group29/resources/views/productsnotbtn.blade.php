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

        @foreach ($products as $product)
            <section class="product-list">
                <div class="product-container">
                    <div class="card">
                        <div class="title">{{$product->name}}</div>
                        <a href="{{ url('/cake') }}">
                            <img class="recipeimg" src="{{ url('storage/images/'.$product->image) }}" alt="" title="" />
                            <!-- <div class="text">Click to see more</div> -->
                        </a>
                                    <div class="buy-button">
                                        <form action="checkout" method="get">
                                            @csrf 
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <p>Log in to buy a product</p>
                                            <!-- <button class="btn btn-primary" type="submit" href="/public/checkout">Add to Cart</button> -->
                                        </form>
                                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        @include('layouts/footer')
    </body>
</html>

