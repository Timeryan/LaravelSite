@extends('layouts.app')
@section('title')
    Отзывы
@endsection
@section('content')
    <div class="row text-center mt-5 ml-5 mr-5">
        @foreach($listReview as $review)
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#777"></rect>
                    <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                </svg>
                <h2>{{$review->userName}}</h2>
                <h3>{{$review->themeMessage}}</h3>
                <p>{{$review->textMessage}}</p>
            </div><!-- /.col-lg-4 -->


                @endforeach




    </div>

    <div class="ml-5 mr-5">
        @if (Auth::check())
        <form action={{route("review-form")}}  method="post">
            @csrf

            <div class="mb-3">
                <label for="text">Тема сообщения</label>
                <div class="input-group">
                    <input name="themeMessage" type="text" class="form-control" id="themeMessage" required="">
                </div>
            </div>

            <div class="mb-3">
                <label for="text">Текст сообщения</label>
                <div class="input-group">
                    <textarea name="textMessage" class="form-control" id="textMessage" required="">

                    </textarea>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Комментировать</button>
        </form>
        @endif
    </div>
@endsection
