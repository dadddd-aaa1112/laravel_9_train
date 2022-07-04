<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Models\tagLikes;
use App\Models\WhoLikes;
use Illuminate\Http\Request;
use App\Models\Likes;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $whoLikes = WhoLikes::all();
        $tags = tagLikes::all();
        return view('likes.create', compact('whoLikes','tags'));
    }

}
