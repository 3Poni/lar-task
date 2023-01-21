<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container navbar col-md-12 ">
        <div class="nav-item">
            <a href="{{ route('admin.main.index') }}">Меню администратора</a>
        </div>
    </div>
    <ul>
    @foreach($authors as $author)
        <li><b>Автор: {{ $author['first_name'] . " " . $author['last_name']}}</b></li>
         <span>{{ 'Кол-во книг у автора: ' . count($author['books']) }}</span>
            <ol>
                @if(count($author['books']) > 0)
                @foreach($author['books'] as $book)
                        <li><span>Книга "{{ $book['title'] }}"</span></li>
                @endforeach
                @else()
                        <span>У автора нет книг</span>
                @endif
            </ol>
    @endforeach
    </ul>
</body>
</html>
