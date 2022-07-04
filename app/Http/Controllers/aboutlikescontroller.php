<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

class aboutlikescontroller extends Controller
{
    public function index() {
        return view('aboutLikes') ;
    }
}
