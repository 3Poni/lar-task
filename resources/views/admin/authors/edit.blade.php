@extends('admin.books.layouts.app')
@section('content')
    <div class="container align-content-center mt-md-5">
        <h1>Редактирование книги</h1>
        <form class="form" action="{{ route('admin.book.update', $book->id) }}" method="post">
            @csrf
            @method('PATCH')
            <label for="title">Название книги</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}">
            <label for="author_id">Имя автора книги</label>
            <select class="mt-md-3" id="author_id" name="author_id" class="form-control">
                @foreach($authors as $author)
                <option value="{{ $author->id }}"  {{ $author->id == $book->author_id ? 'selected' : '' }}
                >{{ $author->first_name ." " . $author->last_name }}</option>
                @endforeach
            </select>
            <input type="submit" name="button">
        </form>
    </div>
@endsection
