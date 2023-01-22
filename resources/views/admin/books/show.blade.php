@extends('admin.books.layouts.app')
@section('content')
    <div class="container col-md-6 mt-md-3">
        <div class="btn btn-warning mb-md-3">
            <a class="link text-decoration-none text-dark" href="{{ route('admin.book.edit', $book->id) }}">
                Редактировать данные книги
            </a>
        </div>
        <div>
        <ul class="list-group row-cols-md-3">
                <li class="list-group-item text-dark bg-light">Название книги: <b>{{ $book->title }}</b></li>
                <li class="list-group-item">Автор книги:
                    <a class="link text-decoration-none text-dark" href="{{ route('admin.author.show', $author['id']) }}">
                        <b>{{$author['first_name'] . " " . $author['last_name']}}</b>
                    </a>
                </li>
        </ul>
        </div>
        <form action="{{ route('admin.book.delete', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger" role="button">Удалить книгу</i>
            </button>
        </form>
    </div>
@endsection
