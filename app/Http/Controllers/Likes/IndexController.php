<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Http\Resources\Likes\LikesResource;
use App\Models\Likes;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke() {
        $likes = Likes::all();
        return LikesResource::collection($likes);

       // return view('likes.index', compact('likes'));
    }

}
