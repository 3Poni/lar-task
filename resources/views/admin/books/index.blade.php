@extends('admin.books.layouts.app')
@section('content')
    <div class="container col-md-6 align-items-center mt-md-3">
        <div class="container col-md-6 align-content-center mt-md-3">
            <a class="btn btn-warning  btn-outline-dark text-decoration-none text-dark"
               href="{{ route('admin.book.create') }}">
                Добавить новую книгу
            </a>
        </div>
        <div class="container align-content-center col-lg-9 mt-md-3">
            <ul class="flex-md-grow-0 list-group align-items-center-center">
                @foreach($books as $book)
                    <div class="container ">
                        <li class="list-group-item col-lg-9 mt-md-3">
                            Название книги: <b>{{ $book->title}}</b><br>
                            <span class="list-inline-item col-lg-9 mb-md-3">Автор:
                                <a class="text-decoration-none text-dark"
                                   href="{{ route('admin.author.show', $book->author->id) }}">
                                    <b>{{ $book->author->first_name . " " . $book->author->last_name }}</b>
                                </a>
                            </span>
                        </li>
                        <li class="list-inline-item col-lg-9">
                            <span class="btn btn-outline-primary mb-md-3">
                            <a class="text-decoration-none text-dark" href="{{ route('admin.book.show', $book->id) }}">
                                Посмотреть
                            </a>
                            </span>
                            <span class="btn btn-outline-warning mb-md-3">
                            <a class="text-decoration-none text-dark" href="{{ route('admin.book.edit', $book->id) }}">
                                Редактировать
                            </a>
                            </span>
                            <span class="btn btn-outline-danger mb-md-3">
                            <a class="text-decoration-none text-dark" href="{{ route('admin.book.delete', $book->id) }}">
                                Удалить
                            </a>
                            </span>
                        </li>
                        <hr class="col-lg-9">
                    </div>
            @endforeach
        </div>
        </ul>
    </div>
@endsection
