@extends('layouts.likes')
@section('content')
    <form action="{{ route('likes.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input
                value="{{old('title')}}"
                type="text" name="title" class="form-control" id="title">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">desc</label>
            <input
                value="{{old('desc')}}"
                type="text" name="desc" class="form-control" id="desc">
            @error('desc')
            <p class="text-danger">{{$message}}</p>

            @enderror
        </div>
        <div>
            <label for="whoLikes_id">who likes</label>
            <select class="form-select" id="whoLikes_id" name="whoLikes_id">
                @foreach($whoLikes as $who)
                    <option
                        {{old('whoLikes_id') == $who->id ? 'selected' : ''}}
                        value="{{$who->id}}">{{$who->titleLikes}}</option>
                @endforeach
            </select>
            @error('whoLikes_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div>
            <select class="form-select" multiple id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
