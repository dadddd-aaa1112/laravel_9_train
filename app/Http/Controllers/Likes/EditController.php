<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Models\tagLikes;
use App\Models\WhoLikes;
use Illuminate\Http\Request;
use App\Models\Likes;


class EditController extends BaseController
{
   public function __invoke(Likes $like) {

           $whoLikes = whoLikes::all();
           $tags = tagLikes::all();
           return view('likes.edit', compact('like', 'whoLikes', 'tags'));
       }

   }
