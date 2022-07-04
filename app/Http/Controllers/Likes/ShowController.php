<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Likes;

class ShowController extends BaseController
{
    public function __invoke(Likes $like) {
        return view('likes.show', compact('like'));
    }

}
