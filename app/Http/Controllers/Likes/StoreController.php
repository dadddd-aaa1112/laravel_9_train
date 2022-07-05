<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Likes\StoreRequest;
use App\Http\Resources\Likes\LikesResource;
use App\Models\Likes;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $like = $this->service->store($data);
        return $like instanceof Likes ? new LikesResource($like) : $like;
        //return redirect()->route('likes.index');


    }

}
