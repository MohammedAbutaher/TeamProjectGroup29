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
</html>