@extends('admin.layouts.app')
@section('content')
    <div class="container align-content-center mt-md-5">
        <h1>Редактирование авторов</h1>
        <form class="form" action="{{ route('admin.author.update', $author->id) }}" method="post">
            @csrf
            @method('PATCH')
            <input type="text" id="first_name" name="first_name" value="{{ $author->first_name }}">
            <input type="text" id="last_name" name="last_name" value="{{ $author->last_name }}">
            <input type="submit" name="button">
        </form>
    </div>
@endsection
