<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Lizard</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <script type="text/javascript">
        Lizard.Config = {
            'locale': '{{ config('app.locale') }}',
        };
    </script>
</head>
<body id="forum">
@include('partials.nav')
<div id="main" class="container">
    @include('partials.error')
    @yield('content')
</div>
<script src="{{ elixir('js/all.js') }}"></script>
<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
