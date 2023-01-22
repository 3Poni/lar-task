@extends('admin.layouts.app')
@section('content')
    <div class="container col-md-6 mt-md-3">
        <div class="btn btn-warning mb-md-3">
            <a class="link text-decoration-none text-dark" href="{{ route('admin.author.edit', $author->id) }}">
                Редактировать данные автора
            </a>
        </div>
        <ul class="list-group row-cols-md-3">
            <li class="list-group-item text-dark bg-light">Имя автора:
                <b>{{ $author->first_name . " " . $author->last_name }}</b></li>
            <li class="list-group-item text-dark">Количество книг:
                <b>{{ count($books) }}</b></li>
                @foreach($books as $book)
                <li class="list-group-item">Название книги:
{{--                    {{ dd($book) }}--}}
                    <b>{{ $book['title'] }}</b></li>
                @endforeach
        </ul>
        <form action="{{ route('admin.author.delete', $author->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger" role="button">Удалить автора</i>
            </button>
        </form>
    </div>
@endsection
