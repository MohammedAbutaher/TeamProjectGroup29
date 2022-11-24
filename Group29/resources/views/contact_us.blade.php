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

    <!--Mo-Contact-Form-->

    <form id="sign-up" onsubmit="return validateForm()">


        <td> Full Name* </td>
<<<<<<< HEAD
        <input class="input_contact_us" type="text" id="fname" value="">
=======
        <input type="text" id="fname" value="">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <span id="blankMsg" style="color:red"> </span> <br>


        <td> Last Name </td>
<<<<<<< HEAD
        <input class="input_contact_us" type="text" id="lname" value="">
=======
        <input type="text" id="lname" value="">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <span id="charMsg" style="color:red"> </span> <br>

        <br>

        <td>Pick Date</td>
<<<<<<< HEAD
        <input class="input_contact_us" type="date" id="Apdate">
=======
        <input type="date" id="Apdate">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <br>


        <label for="con">Pick How to be Contacted</label>

        <br>
        <input type="radio" id="rdText" name="fav_language" value="text">
        <label for="text">TEXT</label><br>
        <input type="radio" id="rdEmail" name="fav_language" value="text1">
        <label for="Email">Email</label><br>
        <br>
        <td> Enter Phone Number (UK ONLY) </td>
<<<<<<< HEAD
        <input class="input_contact_us" type="tel" id="PhoneNumber" value="">
=======
        <input type="tel" id="PhoneNumber" value="">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <br>




        <td> Enter Email* </td>
<<<<<<< HEAD
        <input class="input_contact_us" type="text" id="email" value="">
=======
        <input type="text" id="email" value="">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <span id="message1" style="color:red"> </span> <br>


        <td> Confirm Email* </td>
<<<<<<< HEAD
        <input class="input_contact_us" type="text" id="email2" value="">
=======
        <input type="text" id="email2" value="">
>>>>>>> 9e8eadc635a3ac00ef2fb40c1f953ec5d214f021
        <span id="message2" style="color:red"> </span> <br>


        <input type="submit" value="Submit" onclick="return confirm('Are You Sure That You Would Like to Send These Details To  210172232@aston.ac.uk');">


        <button type="reset" value="Reset">Reset</button>
        <a href="https://github.com/login%22%3E<img id=" Github" src="./Images/Github.jpg" alt="Github"></a>
    </form>

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