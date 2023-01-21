@extends('admin.books.layouts.app')
@section('content')
    <div class="container align-content-center mt-md-5">
        <h1>Добавление новой книги</h1>
        <form class="form" action="{{ route('admin.book.store') }}" method="post">
            @csrf
            <label for="title">Название книги</label>
            <input type="text" id="title" name="title" placeholder="Введите название книги">
            @error('title')
            <div class="text-danger">
                Необходимо указать название книги
            </div>
            @enderror
            <labe for="author_id">Имя автора книги</labe>
            <select class="mt-md-1"  id="author_id" name="author_id" class="form-control">
                <option value="">Выберите автора</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->first_name ." " . $author->last_name }}</option>
                @endforeach
            </select>
            @error('author_id')
            <div class="text-danger">
                Необходимо указать автора книги
            </div>
            @enderror
            <input type="submit" name="button">
        </form>
    </div>
@endsection
