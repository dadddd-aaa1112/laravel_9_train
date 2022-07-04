<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Likes\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Likes;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Likes $like)
    {
        $data = $request->validated();
        $this->service->update($like, $data);
        return redirect()->route('likes.index');


    }
}
