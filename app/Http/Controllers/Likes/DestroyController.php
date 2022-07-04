<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Likes;


class DestroyController extends BaseController
{
    public function __invoke(Likes $like) {
        $like->delete();
        return redirect()->route('likes.index');
    }


}
