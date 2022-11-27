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

    </header>

    <h1>List of Users</h1>


    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Registration Date</td>

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