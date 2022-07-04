<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Models\Likes;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke() {
        $likes = Likes::paginate(3);
        return view('likes.index', compact('likes'));
    }

}
