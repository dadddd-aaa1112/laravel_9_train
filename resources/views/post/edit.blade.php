@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="desc" class="form-label">Desc</label>
                <input type="text" name="desc" class="form-control" id="desc" placeholder="desc"
                       value="{{ $post->desc }}">
                <label for="category">category</label>

                <select class="form-select form-select-sm" id="category" name="category_id">
                    @foreach($categories as $category)

                        <option {{$category->id === $post->category_id ? 'selected' : ''}}
                                value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <label for="tags">Tags</label>
                <select class="form-select" id="tags" name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                                {{$tag->id === $postTag->id ? 'selected' : ''}}
                            @endforeach
                            value="{{$tag->id}}"
                        >{{$tag->title}}</option>
                    @endforeach

                </select>
                {{$post->tags}}
            </div>

            <button type="submit" class="btn btn-dark">update</button>
        </form>
    </div>
@endsection
