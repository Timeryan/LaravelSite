@extends('.layouts.app')

@section('title')
    Полная страница
@endsection
@section('content')
    <div class="container marketing ">
        <h1 class="featurette-heading">{{$record->title}}</h1>
        <div class="row">


        <img style="width: 300px; height: 300px" src="{{$record->srcImage}}">

        <p class="lead" > {{$record->text}}</p>
        </div>
    <div/>
@endsection
