<?php

namespace App\Http\Controllers\Likes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Likes\StoreRequest;
use App\Models\Likes;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('likes.index');


    }

}
