<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Likes</title>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="{{route('likes.index')}}">main</a></li>
            <li><a href="{{ route('aboutLikes.index') }}">about</a></li>
            <li><a href="{{ route('contactsLikes.index') }}">contacts</a></li>
            <li><a href="{{ route('likes.create') }}">create</a></li>
        </ul>
    </nav>
</div>

@yield('content')
</body>
</html>
