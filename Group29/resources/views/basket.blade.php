<?php
/*
if(isset($_POST['submit']))
{
    $name=$_POST['name']; 
    $img=$_FILES['image']['name']; 

    $insert="insert into image values ('NULL', 'name', '$img')"; 

    if(mysql_quer($insert)) 
    {
        move_uploaded_file($_FILES['image']['tmp_name'], "picture/$img"); 
        echo "<script>alert('image has been uploaded to folder')</script>"; 
    } 
    else { 
        echo "<script>alert('image does not upload')</script>";
    }
}

if(isset($_POST['submit']))
{ 
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $_FILES['file']['name'];
}
*/
?>

<html>

<h1>Cart function</h1>
<form action="checkoutpage/" method="get"> 
    <button class="btn btn-pirmary" type="submit" href="/puplic/order">Checkout</button>
</form>

<!--
<form action="basket" method="get" enctype="multipart/form-data"> 
<label>Name</label>
<input type="text" name="name">

<label>Select image to upload</label>
<input type="file" name="image">
<input type="submit" name="submit" value="upload the picture">
</form>

<form action="basket" method="GET" enctype="mutipart/form-data">
    <input type="file" name="file"> 
    <button type="submit" name ="submit">Upload</button>
--> 
<h1>Add function</h1>
<form action="basket" method="post" enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -->

    <!-- --> 
    <textarea rows="3" cols="30" input type="search" name="name" placeholder="Name"></textarea>
    <!--  -->


    <input type="file" name="image">
    <input type="submit" name="upload">


    <!--  -->
    <textarea rows="3" cols="30" input type="search" name="quainty" placeholder="quainty"></textarea>
    <textarea rows="3" cols="30" input type="search" name="productPrice" placeholder="productPrice"></textarea>
    <textarea rows="3" cols="30" input type="search" name="description" placeholder="description"></textarea>
    <!--  -->
    
</form>
<h1>Display function</h1>
<table style="width:100%"> 
    <tr>
        <th>name</th>
        <th>image</th>
        <th>image size</th>
        <th>quainty</th>
        <th>productPrice</th>
        <th>description</th>

  @foreach ($photos as $photo)
    <tr>
        <td>{{$photo->name}}</td>    
        <td><img src="{{ url('storage/images/'.$photo->image) }}" alt="" title="" /></td> <!-- don't touch      -->
        <td>{{$photo->size}}</td>
         <td> 
<form action="basket" method="post" enctype="multipart/form-data">
     <br><input type="number" name="editQuainty" value="{{$photo->quantity}}"><br><br></span>
</form>
    <!--  -->

     </td>     
        <td>{{$photo->productPrice}}</td>    
        <td>{{$photo->description}}</td> 
        <form action="checkout" method="get">
            @csrf 
            <input type="hidden" name="product_id" value="{{ $photo->id}}">
            <td><button class="btn btn-primary" type="submit" href="/public/checkout">Add to Cart</button></td>
        </form>
    </tr>
    @endforeach

    
</table> 
</html> 