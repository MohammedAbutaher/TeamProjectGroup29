


<head>
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <title>Catalog</title>
</head>

<body>
    <header>
        @include('layouts/nav')

    </header>

    <div class="Information">

    <br>
    <br>

    <img id="cake_size" src="{{ url('images/cake.jpg') }}" alt="">

    <!-- <img src="{{url('images/cake.png')}}"/> -->

        <div class="text">
            <nav>
                <br><br><br>
                <h3>Ingredients</h3>
                <pre>
                135 gms dark chocolate
                95 gms butter
                100 gms icing sugar
                2 each egg yolks + whole eggs
                35 gms flour
                
                 
        </pre>
                <h3>Instructions</h3>
                <pre>
                1.Pre heat the oven at 200 degrees.
                2.In a microwaveable bowl add chocolate and butter. Melt it. (You can melt using the double boiler method too.)
                3.In another bowl whisk together sugar and eggs.
                4.Mix together the chocolate-butter mixture with the sugar-eggs mixture.
                5.Fold in the flour.
                6.Strain the mixture to remove any lumps.
                7.Keep this in the fridge for 5-7 minutes to chill.
                8.Pour the batter in greased ramekins.
                9.Bake for 9-10 minutes.
                10.Serve with whipped cream / vanilla ice cream or fresh fruit.
                
        </pre>
            </nav>
        </div>
    </div>

    @include('layouts/footer')
</body>