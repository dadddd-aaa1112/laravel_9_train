@extends('layouts.likes')
@section('content')
{{$like->id}}
{{$like->title}}
{{$like->desc}}
<a href="{{ route('likes.edit', $like->id) }}">edit</a>


<form action="{{ route('likes.destroy', $like->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="delete">
</form>

<a href="{{ route('likes.index') }}">back</a>
@endsection
