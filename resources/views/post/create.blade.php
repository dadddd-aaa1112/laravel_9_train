@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="desc" class="form-label">Desc</label>
                <input type="text" name="desc" class="form-control" id="desc" value="{{old('desc')}}" placeholder="desc">


                @error('desc')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div>
            <label for="category">category</label>

                <select class="form-select form-select-sm" id="category" name="category_id">
                    @foreach($categories as $category)
                    <option

                        {{old('category_id') == $category->id ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <label for="tags">Tags</label>
            <select class="form-select" id="tags" name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option

                        value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-dark">create</button>
        </form>
    </div>
@endsection
