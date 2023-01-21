@extends('admin.layouts.app')
@section('content')
    <div class="container col-md-6 align-items-center mt-md-3">
        <div class="container col-md-6 align-content-center mt-md-3">
            <a class="btn btn-warning" href="{{ route('admin.author.create') }}">Добавить нового автора</a>
        </div>
        <div class="container col-lg-6 mt-md-3 ">
        <ul class="flex-md-grow-0 list-group align-items-center-center">
            @foreach($authors as $author)
                <div class="border-3 border-dark border-bottom">
                <li class="mt-md-3">
                    <b>Автор: {{ $author->first_name . " " . $author->last_name}}</b>
                    <li>Количество книг: {{ count($author['books']) }}</li>
                </li>
                <li class="btn btn-outline-primary col-md-3 mt-md-3" ><a href="{{ route('admin.author.show', $author->id) }}">Посмотреть</a></li>
                <li class="btn btn-outline-danger col-md-4 mt-md-3"><a href="{{ route('admin.author.edit', $author->id) }}">Редактировать</a></li>
                </div>
            @endforeach
        </div>
        </ul>
    </div>
@endsection
