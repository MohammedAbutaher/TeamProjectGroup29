<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List of Users</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
</head>

<body>
    <header>
        @include('layouts/nav')
<<<<<<< HEAD
        
=======
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5

    </header>

    <h1>List of Users</h1>


<<<<<<< HEAD
    <table class="users_CSS">
        <tr>
            <td id="first_row_table">ID</td>
            <td id="first_row_table">Name</td>
            <td id="first_row_table">Email</td>
            <td id="first_row_table">Registration Date</td>
=======
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Registration Date</td>
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5

        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user ['id']}}</td>
            <td>{{$user ['name']}}</td>
            <td>{{$user ['email']}}</td>
            <td>{{$user ['created_at']}}</td>

        </tr>
        @endforeach
    </table>


    @include('layouts/footer')
</body>

</html>