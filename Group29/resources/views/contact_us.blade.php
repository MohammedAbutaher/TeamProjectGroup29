<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Index</title>

    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">

</head>

<body id="contact_us_back_image">
    <header>
        @include('layouts/nav')
    </header>

    <!--Mo-Contact-Form-->

    <br>
    <br>
    <br>
    <div id="contact_us_form_space">



        <form id="sign-up" onsubmit="return validateForm()">


            <td> Full Name* </td>
            <input class="input_contact_us" type="text" id="fname" value="">
            <span id="blankMsg" style="color:red"> </span> <br>


            <td> Last Name </td>
            <input class="input_contact_us" type="text" id="lname" value="">
            <span id="charMsg" style="color:red"> </span> <br>

            <br>

            <td>Pick Date</td>
            <input class="input_contact_us" type="date" id="Apdate">
            <br>


            <label for="con">Pick How to be Contacted</label>

            <br>
            <input type="radio" id="rdText" name="fav_language" value="text">
            <label for="text">TEXT</label><br>
            <input type="radio" id="rdEmail" name="fav_language" value="text1">
            <label for="Email">Email</label><br>
            <br>
            <td> Enter Phone Number (UK ONLY) </td>
            <input class="input_contact_us" type="tel" id="PhoneNumber" value="">
            <br>




            <td> Enter Email* </td>
            <input class="input_contact_us" type="text" id="email" value="">
            <span id="message1" style="color:red"> </span> <br>


            <td> Confirm Email* </td>
            <input class="input_contact_us" type="text" id="email2" value="">
            <span id="message2" style="color:red"> </span> <br>


            <input id="contact_button_location" class="logbtn" type="submit" value="Submit" onclick="return confirm('Are You Sure That You Would Like to Send These Details To Recipes 2 Go?');">


            <!-- <button type="reset" value="Reset">Reset</button>
            <a href="https://github.com/login%22%3E<img id=" Github" src="./Images/Github.jpg" alt="Github"></a> -->
        </form>
    </div>
    @include('layouts/footer')

</body>

</html>