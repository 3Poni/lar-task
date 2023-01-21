@extends('admin.layouts.app')
@section('content')
    <div class="container align-items-center mt-md-5">
        <h1>Добавить автора</h1>
        <form class="form" action="{{ route('admin.author.store') }}" method="post">
            @csrf
            <input type="text" id="first_name" name="first_name" placeholder="Введите имя">
            <input type="text" id="last_name" name="last_name" placeholder="Введите фамилию">
            <input type="submit" name="button">
        </form>
    </div>
@endsection
