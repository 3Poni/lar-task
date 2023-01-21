@extends('admin.books.layouts.app')
@section('content')
    <div class="container col-md-6 align-items-center mt-md-3">
        <div class="container col-md-6 align-content-center mt-md-3">
            <a class="btn btn-warning" href="{{ route('admin.book.create') }}">Добавить новую книгу</a>
        </div>
        <div class="container col-lg-6 mt-md-3 ">
        <ul class="flex-md-grow-0 list-group align-items-center-center">
            @foreach($books as $book)
                <div class="border-3 border-dark border-bottom">
                <li class="mt-md-3">
                    <b>Название книги: {{ $book->title}}</b>
                    <li>Автор:
                        <a href="{{ route('admin.author.show', $book->author->id) }}">
                            {{ $book->author->first_name . " " . $book->author->last_name }}
                        </a>
                    </li>
                </li>
                <li class="btn btn-outline-primary col-md-3 mt-md-3" ><a href="{{ route('admin.book.show', $book->id) }}">Посмотреть</a></li>
                <li class="btn btn-outline-danger col-md-4 mt-md-3"><a href="{{ route('admin.book.edit', $book->id) }}">Редактировать</a></li>
                </div>
            @endforeach
        </div>
        </ul>
    </div>
@endsection
