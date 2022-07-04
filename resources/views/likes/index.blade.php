@extends('layouts.likes')
@section('content')
<div>
@foreach($likes as $like)
<p><a href="{{ route('likes.show', $like->id) }}">
    {{$like->id}}. {{$like->title}}
{{$like->desc}} {{$like->whoLikes_id}}</a>
</p>

@endforeach
    <div>
        {{$likes->links()}}
    </div>
</div>

@endsection
