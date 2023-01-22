@extends('admin.layouts.app')
@section('content')
    <div class="container col-md-6 align-items-center mt-md-3">
        <div class="container col-md-6 align-content-center mt-md-3">
            <a class="btn btn-warning btn-outline-dark text-decoration-none text-dark"
               href="{{ route('admin.author.create') }}">
                Добавить нового автора
            </a>
        </div>
        <div class="d-flex-row container col-lg-8 mt-md-3">
            <ul class="list-group ">
                @foreach($authors as $author)
                    <div class="container">
                        <li class="list-group-item col-lg-8 mt-md-3">
                            Автор: <b>{{ $author->first_name . " " . $author->last_name}}</b><br>
                        <span class="list-inline col-lg-8 mb-md-3">Кол-во книг: {{ count($author['books']) }}</span>
                        </li>
                        <li class="list-inline-item col-lg-8">
                            <span class=" btn btn-outline-primary mb-md-3">
                            <a class="text-decoration-none text-dark"
                               href="{{ route('admin.author.show', $author->id) }}">
                                Посмотреть
                            </a>
                                </span>
                        <span class=" btn btn-outline-warning mb-md-3">
                            <a class="text-decoration-none text-dark"
                               href="{{ route('admin.author.edit', $author->id) }}">
                                Редактировать
                            </a>
                        </span>
                        <span class=" btn btn-outline-danger mb-md-3">
                            <a class="text-decoration-none text-dark"
                               href="{{ route('admin.author.delete', $author->id) }}">
                                Удалить
                            </a>
                        </span>
                        </li>
                        <hr class="col-lg-8">
                    </div>
            @endforeach
        </div>
        </ul>
    </div>
@endsection
