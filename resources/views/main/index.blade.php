<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Публичная часть</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
<!-- Navbar content-->
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Публичная часть</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="/home">Войти</a></li>
                        <li class="nav-item"><a class="nav-link" href="/admin">Админ меню</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<!-- Page content-->
    <section id="about">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8 mt-lg-3">
                    <h2>About this page</h2>
                    <p class="lead">Ниже представлен список авторов и их книг</p>
                    <ul class="list-group">
                        @foreach($authors as $author)
                            <li class="list-group-item">Автор: <b>{{ $author['first_name'] . " " . $author['last_name']}}</b><br>
                            <span>Кол-во книг у автора: <b>{{ count($author['books']) }}</b></span>
                            <ol class="list-group-item list-group-numbered">
                                @if(count($author['books']) > 0)
                                    @foreach($author['books'] as $book)
                                        <li class="list-group-item-light">
                                            <span>Книга: "<b>{{ $book['title'] }}</b>"</span>
                                        </li>
                                    @endforeach
                                @else()
                                    <li class="list-group-item-light">
                                        <span>У автора нет книг</span>
                                    </li>
                                @endif
                                </li>
                            </ol>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="text-center mt-5">

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>

