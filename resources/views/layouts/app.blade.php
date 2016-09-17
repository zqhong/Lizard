<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Lizard</title>
    <link rel="stylesheet" href="{{ elixir('dist/css/all.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
<div class="row">
    @yield('content')
</div>
<script src="{{ elixir('dist/js/all.js') }}"></script>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
