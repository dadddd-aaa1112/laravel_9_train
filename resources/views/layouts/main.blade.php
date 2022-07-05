<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav>
            <ul>
                <li><a href="{{route('main.index')}}">main</a></li>
                <li><a href="{{route('contactsPosts.index')}}">contacts</a></li>
                <li><a href="{{route('aboutPosts.index')}}">about</a></li>

                @can('view', auth()->user())
                    <li><a href="{{route('admin.post.index')}}">admin panel</a></li>
                @endcan
            </ul>
        </nav>

    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
