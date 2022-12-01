@extends('layouts.app')

@section('content')

<header>


</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ Auth::user()->name }}

                    {{ __('You are logged in!') }}

                    <br>

                    <a href="{{ url('/') }}">
                        Clcik Here to visit our Homepage!
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>


<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> e6d356d270896ba541e04282679d1f52342e20e5
