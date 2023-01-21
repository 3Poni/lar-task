@extends('admin.layouts.app')
@section('content')
    <div>
        <div class="btn-info">
            <a href="{{ route('admin.author.edit', $author->id) }}">Редактировать данные автора</a>
        </div>
        <ul class="list-group">
                <li>{{ $author->first_name }}</li>
                <li>{{ $author->last_name }}</li>
                @foreach($books as $book)
                <li>{{ $book->author_id == $author->id ? $book->title : false}}</li>
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
