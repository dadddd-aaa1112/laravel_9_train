<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {

        $data = $request->validated();
        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 5;

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate($perPage, ['*'], 'page', $page);

        return PostResource::collection($posts);
        //return view('post.index', compact('posts'));

// фильтрация простая
//       $data = $request->validated();
//       $query = Post::query();
//
//       if (isset($data['category_id'])) {
//           $query->where('category_id', $data['category_id']);
//       }
//
//       if (isset($data['desc'])) {
//           $query->where('desc', 'like', "%{$data['desc']}%");
//       }
//
//       $posts = $query->get();
//       dd($posts);

    }


}
