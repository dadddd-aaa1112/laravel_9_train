<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Likes\UpdateRequest;
use App\Http\Resources\Likes\LikesResource;
use Illuminate\Http\Request;
use App\Models\Likes;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Likes $like)
    {
        $data = $request->validated();
        $like = $this->service->update($like, $data);

        return $like instanceof Likes ? new LikesResource($like) : $like;
        //return redirect()->route('likes.index');


    }
}
