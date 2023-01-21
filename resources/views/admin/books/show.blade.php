@extends('admin.books.layouts.app')
@section('content')
    <div class="container col-md-6 mt-md-3">
        <div class="btn-info">
            <a href="{{ route('admin.book.edit', $book->id) }}">Редактировать данные книги</a>
        </div>
        <ul class="list-group">
                <li>Название книги: <b>{{ $book->title }}</b></li>
                <li>Автор книги<a href="{{ route('admin.author.show', $author['id']) }}">
                        <b>{{ $author['first_name'] . " " . $author['last_name'] }}</b></a>
                </li>
        </ul>
        <form action="{{ route('admin.book.delete', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger" role="button">Удалить книгу</i>
            </button>
        </form>
    </div>
@endsection
