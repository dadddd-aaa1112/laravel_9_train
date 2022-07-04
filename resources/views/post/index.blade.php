@extends('layouts.main')
@section('content')
<div>
    <div>
    <a href="{{ route('post.create') }}">create</a>
    </div>
    @foreach($posts as $post)
    <p>
    <a href="{{ route('post.show', $post->id) }}">{{$post->id}}. {{$post->desc}} {{$post->category_id}} </a>
    </p>


@endforeach
    <div>
        {{$posts->withQueryString()->links()}}
    </div>
</div>
@endsection
