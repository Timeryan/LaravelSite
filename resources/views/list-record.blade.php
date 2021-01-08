@extends('layouts.app')
@section('title')
    Список мест
@endsection
@section('content')
    <div class="container marketing">
        <form action={{route("search-record")}}  method="post" class="mt-3" >
            @csrf
            <div class="mb-3">
                <div class="input-group">
                    <input name="searchTitle" type="text" class="form-control" id="searchTitle" required="">

                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Поиск</button>
        </form>
        @foreach($listRecord as $record)

            <div class="row featurette mt-5 mb-5">
                <div class="col-md-7">
                    <h2 class="featurette-heading">{{$record->title}}</h2>
                    <p style="
                       height: 210px;
                       overflow: hidden;"
                       class="lead"> {{$record->text}}</p>
                    <a class="btn btn-secondary" href="/full-record/{{$record->id}}" role="button">View details »</a>
                </div>
                <div class="col-md-5">
                    <img style="width: 300px; height: 300px " src="{{ $record->srcImage}}">
                </div>
            </div>
        @endforeach
        @if (Auth::check())
        @if(Auth::user()->email == 'admin@admin.com')


        <form action={{route("post_record")}}  method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="text">Тема записи</label>
                <div class="input-group">
                    <input name="title" type="text" class="form-control" id="title" required="">
                </div>
            </div>

            <div class="mb-3">
                <label for="text">Текст записи</label>
                <div class="input-group">
                    <textarea name="text" class="form-control" id="text" required="">

                    </textarea>
                </div>
            </div>
            <div class="form-file form-file-sm">
                <input name="srcImage" type="file" class="form-file-input" id="srcImage">
                <label class="form-file-label" for="customFileSm">

                </label>
            </div>
            <hr class="mb-4">

            <button class="btn btn-primary btn-lg btn-block" type="submit">Добавить новую запись</button>
        </form>
        @endif
        @endif
    </div>
@stop
