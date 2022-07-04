<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

class contactslikescontroller extends Controller
{
    public function index() {
        return view('contactsLikes');
    }
}
