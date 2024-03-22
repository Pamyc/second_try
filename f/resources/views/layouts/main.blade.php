<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('post.index')}}">post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post2.index')}}">post2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post3.index')}}">post3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('post4.index')}}">post4</a>
                    </li>
                </ul>
            </div>
        </nav>
{{--        <nav>--}}
{{--            <ul>--}}
{{--                <li><a href={{route('post.index')}}>Post</a></li>--}}
{{--                <li><a href={{route('post2.index')}}>Post2</a></li>--}}
{{--                <li><a href={{route('post3.index')}}>Post3</a></li>--}}
{{--                <li><a href={{route('post4.index')}}>Post4</a></li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
    </div>
    @yield('content')
</div>
</body>
</html>
