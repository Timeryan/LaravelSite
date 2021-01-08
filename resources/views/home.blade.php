@extends('layouts.app')

@section('content')
    <img style="width: 100%;
        height: auto;
        margin-top: -2rem;"
         class="home_image" src="./images/background.jpg">
    <div class="container">
        <div class="row justify-content-center">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection
