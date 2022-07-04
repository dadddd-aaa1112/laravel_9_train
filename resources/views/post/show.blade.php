@extends('layouts.main')
@section('content')
<div>

    <p>

   show {{$post->id}}. {{$post->desc}}
    </p>
<div>
    <div>
<a href="{{route('post.edit', $post->id)}}">edit</a>

    </div>

    <div>
<form action="{{ route('post.delete', $post->id) }}" method="post">
    @csrf
    @method('delete')
<input type="submit" value="delete">

</form>
</div>

<a href="{{ route('post.index') }}">back</a>

</div>
</div>
@endsection
