<<<<<<< HEAD
<?php

use App\Models\Cart;
// $totalPrice = Cart::select($productsCart[0]->productPrice)->toArray();; 
$totalPrice = $productsCart->sum('productPrice');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

  <!--Link to css -->
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Checkoutpage</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
  <main>
    <!-- Nav Bar  -->
    @include('layouts/nav')
    <div class='order'>
      <div class='order-content'>
        <h2>Checkout</h2>
        <div class='line'></div>
        <table class='order-table'>
          @foreach ($productsCart as $product)
          <tr>
            <tbody>
              <div class='picCheck'>
                <td><img src="{{ url('storage/images/'.$product->img_dir) }}" alt="" title="" width="370px" /></td> <!-- don't touch      -->
              </div>
              <td>
                <br> <span class='thin'>
                  <h3>{{$product->productName}}</h3>
                  @if($product->quantity > 0)
                  <h3 style="color:green"> In stock </h3>
                  @else
                  <h3 style="color:red"> Out of stock</h3>
                  @endif
                  <br>£{{$product->productPrice}}
                </span>
                <div class="contain">
                  <br><input type="number" name="editQuainty" value="{{$product->quantity}}"><br><br></span>
                  <span class='thin small'>
                    <div class="contains">
                      {{$product->ingredients}}<br><br>{{$product->instructions}}
                  </span>
                </div>
                <div>
              </td>
            </tbody>
          <tr>
            <div class='price'>
              <form action="remove" method="get">
                @csrf
                <!--  -->
                <input type="hidden" name="productid" value="{{ $product->id}}">
                <td><button class="checkBut" type="submit" href="/public/checkoutpage">Remove</button></td>
              </form>
            </div>
            @endforeach
            <div class="checkoutSli">
              @foreach($productsCart as $productPrice)
              <div class="linespace">
                <table class="tablecheckout">
                  <th>{{$productPrice->productName}}</th>
                  <th>{{$productPrice->quantity}}</th>
                  <th>£{{$productPrice->productPrice}}</th><br>
              </div>
        </table>
        @endforeach
        <div class="linespace">
          <table class="tablecheckout">
            <div class="line"></div>
            <th><br>
              <p1>Total:</p1><p1 style="padding:175px;">{{$totalPrice}}</p1>
            </th>
          </table>
        </div>
      </div>
      <form id="form_location" action="order" mehtod="get" onsubmit="return validateForm()">
        <!--  -->
        <!--  -->
        <!--  -->
        @foreach($productsCart as $order)
        <input type="hidden" name="order" value="{{$order->id}}">
        @endforeach
        <div class="checkoutSli">
          <div class="marg">
            <div class="buttonfix">
              <button class="checkBut" type="submit" onclick="return confirm('We have reviced your order!');">Order!</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </main>
  <!-- Footer -->
  @include('layouts/footer')
</body>

=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> <!--Link to css -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkoutpage</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
      <div class='order-info'>
        <div class='order-info-content'>
          <h2>Checkout</h2>
            <div class='line'></div>
            <table class='order-table'>
                @foreach ($productsCart as $product)
                <tr>
                  <tbody>   
                    <td><img src="{{ url('storage/images/'.$product->img_dir) }}" alt="" title="" /></td> <!-- don't touch      -->
                    <td>
                      <br> <span class='thin'>{{$product->productName}}  
                              <div class='price'>
                                <br>£{{$product->productPrice}}
                              </div>
                            </span>
                      <div class="contain">
                        <br><input type="number" name="editQuainty" value="{{$product->quantity}}"><br><br></span>
                        <span class='thin small'> 
                          <div class="contains">
                            {{$product->Description}}<br><br></span>
                          </div>
                      <div>
                    </td>
                  </tbody>
              <tr>
             <div class='price'>
               <form action="remove" method="get">
                 @csrf
                 <!--  -->
                 <input type="hidden" name="productid" value="{{ $product->id}}">
                   <td><button class="btn btn-primary" type="submit" href="/public/checkoutpage">Remove</button></td>                     
                </form>
              </div>
              @endforeach
              @foreach ($productsCart as $product)
     <form action="order" mehtod="get"> 
      <!--  -->
      <!--  -->
      <!--  -->
          <input type="hidden" name="order" value="{{$product-> id}}"}}>
            <button class="" type="submit">Order!</button>
    </form>
    @endforeach
            </tbody>  
            <p> example </p>     
        </div>
      </div>
    </div>  
  </body>
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
</html>