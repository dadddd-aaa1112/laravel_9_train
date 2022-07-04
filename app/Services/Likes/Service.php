<?php

namespace App\Services\Likes;

use App\Models\Likes;

class Service
{
public function store($data) {
    $tags = $data['tags'];
    unset($data['tags']);
    $like = Likes::create($data);
    $like->tagLikes()->attach($tags);
}

public function update($like, $data){
    $tags = $data['tags'];
    unset($data['tags']);
    $like->update($data);
    $like->tagLikes()->sync($tags);
}
}
