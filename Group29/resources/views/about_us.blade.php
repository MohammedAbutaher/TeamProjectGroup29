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

    <body>

        <div class="information">

            <h1>About Us</h1>
            <h2>Our Story</h2>
            <p> Recipies2Go was established in 2003 by a group of highly motivated individuals who honestly love and adore food. During the year 2003 we started small in Birminghams open markets which was located in the city centre. As many months went by, we saw a significant increase in popularity because of our homemade natural recipies that the whole city was adddicted to. Now we are a multinational establishment that has expanded throughout the globe and we will carry on expanding spreading our help and awareness to good healthy living. Recipies2Go provide different types of cusines from a mouth-watering Italian lasagne to a exqisite steak or even a hearty mushroom soup. We have a huge variety of different recipies that cater towards our customers needs.
        </div>
        <div class="mission">
            <div id="aboutus-2">
                <div class="content-box-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">

                                    <img src="Dishes.jpg" alt="Dishes">
                                    <h1>Mission</h1>
                                    <hr>
                                    <p>
                                        .We follow a special a remarkable and noteworthy equation that states </p>
                                    <h2>'Quality and Healthy Food + Deliciousness and Scrumptiousness Taste = Recipes2Go'</h2>.<br><br>
                                    <p> Our Mission is to provide a more salubrious and beneficial way to living everyday life. Our aim is to lower the amount of health issues that are increasing everyday in the UK. In the most recent NHS health servey two thirds of people are overweight/obese aged 16 and over in the United Kingdom. Where 68% of men are either overweight or obese compared to the 60% of women. As a community we plan to expand and make a positive impactful change to modern day society. With over 17 years of experience, Recipies2Go only provide the best quality ingredients and only provide food that is acceptable and standardized by the Food Standard Agency to provide healthy and safe meals. We like to provide different ranges of age groups from teenagers to the elderly as it is suitable for all ages and backgrounds. We try to provide a safe and simple way to order food and delivered to your doorstop as quickly as possible. Those who hit the gym, we include all the macros that can be adjusted to your specific dietary requirements.</p>
                                    <br><br>

                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">

                                <h3>Acheivements</h3>
                                <hr>
                                <p>
                                    - Voted Best Hygiene company in Birmingham 2021 <br><br>
                                    - Guardian - "A divine experience with inviting and scrumptious recipies" 10/10 <br><br>
                                    - "Finest food in the town" - FoodReviewClub <br><br>
                                    - Halal Food Certification - HMC approved, <br><br>
                                    - Michelin Star Company


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    @include('layouts/footer')
</body>

</html>