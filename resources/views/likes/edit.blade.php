@extends('layouts.likes')
@section('content')
    <form action="{{route('likes.update', $like->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $like->title }}">

        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">desc</label>
            <input type="text" name="desc" class="form-control" id="desc" value="{{$like->desc}}">

        </div>

        <div>
            <label for="whoLikes_id">who likes</label>
            <select class="form-select" id="whoLikes_id" name="whoLikes_id">
                @foreach($whoLikes as $who)
                    <option
                        {{ $who->id ===  $like->whoLikes_id ? 'selected': ''}} value="{{$who->id}}">{{$who->titleLikes}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        @foreach($like->tagLikes as $likesTag)
                            {{$likesTag->id === $tag->id ? 'selected' : '' }}
                            @endforeach
                        value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
