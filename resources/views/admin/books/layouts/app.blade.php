<html>
<head>
    <title>Книги</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="{{ asset('plugins/css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
<!-- (A) SIDEBAR -->
<div id="pgside">
    <!-- (A1) BRANDING OR USER -->
    <!-- LINK TO DASHBOARD OR LOGOUT -->
    <div id="pguser">
        <img src="{{ asset('plugins/images/potato.png') }}">
        <i class="txt">Админ панель</i>
    </div>

    <!-- (A2) MENU ITEMS -->
    <a href="/admin/authors" >
        <i class="ico">&#9733;</i>
        <i class="txt">Авторы</i>
    </a>
    <a href="/admin/books" class="current">
        <i class="ico">&#9728;</i>
        <i class="txt">Книги</i>
    </a>
    <a href="/">
        <i class="ico">&#9738;</i>
        <i class="txt">На главную</i>
    </a>
</div>
@yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
