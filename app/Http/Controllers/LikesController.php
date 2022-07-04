<?php

namespace App\Http\Controllers;

use App\Models\LikesTagLikes;
use App\Models\Post;
use App\Models\tagLikes;
use Illuminate\Http\Request;
use App\Models\Likes;
use App\Models\WhoLikes;

class LikesController extends Controller
{
    public function index()
    {

        $likes = Likes::all();
        return view('likes.index', compact('likes'));
    }

    public function create()
    {
        $whoLikes = whoLikes::all();
        $tags = tagLikes::all();
        return view('likes.create', compact('whoLikes', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
            'whoLikes_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $like = Likes::create($data);

        $like->tagLikes()->attach($tags);

        return redirect()->route('likes.index');
    }

    public function show(Likes $like)
    {
        return view('likes.show', compact('like'));
    }

    public function edit(Likes $like)
    {
        $whoLikes = whoLikes::all();
        $tags = tagLikes::all();
        return view('likes.edit', compact('like', 'whoLikes', 'tags'));
    }


    public function delete()
    {
        $like = Likes::find(3);

        $like->delete();
        dd('delete');
    }

    public function update(Likes $like)
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
            'whoLikes_id' => '',
            'tags' => ''
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $like->update($data);
        $like->tagLikes()->sync($tags);
        return redirect()->route('likes.index');
    }


}
