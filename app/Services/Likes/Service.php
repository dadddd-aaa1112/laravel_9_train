<?php

namespace App\Services\Likes;


use App\Models\Likes;
use App\Models\tagLikes;
use App\Models\WhoLikes;

class Service
{
    public function store($data)
    {
        try {
            $tags = $data['tags'];

            $whoLikes = $data['whoLikes'];
            unset($data['tags'], $data['whoLikes']);
            $tagIds = $this->getTagsId($tags);
            $data['whoLikes_id'] = $this->getCategoryIds($whoLikes);
            $like = Likes::create($data);
            $like->tagLikes()->attach($tagIds);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
        return $like;
    }

    private function getTagsId($tags)
    {
        $tagIds = [];
        foreach ($tags as $tag) {
            $tag = !isset($tag['id']) ? tagLikes::create($tag) : tagLikes::find($tag['id']);
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryIds($item)
    {
        $whoLikes = !isset($item['id']) ? WhoLikes::create($item) : WhoLikes::find($item['id']);
        return $whoLikes->id;
    }


    public function update($like, $data)
    {
        try {
            $tags = $data['tags'];

            $whoLikes = $data['whoLikes'];
            unset($data['tags'], $data['whoLikes']);

            $tagIds = $this->getTagsIdWithUpdate($tags);

            $data['whoLikes_id'] = $this->getCategoryIdsWithUpdate($whoLikes);

            $like->update($data);
            $like->tagLikes()->sync($tagIds);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }


        return $like->fresh();
    }

    private function getTagsIdWithUpdate($tags) {
        $tagIds = [];
        foreach($tags as $tag) {
            if (!isset($tag['id'])) {
                $tag = tagLikes::create($tag);
            } else {
                $currentTag = tagLikes::find($tag['id']);
                $currentTag->update($tag);
                $tag = $currentTag->fresh();
            }
            $tagIds[] = $tag->id;
        }
        return $tagIds;
    }

    private function getCategoryIdsWithUpdate($item)
    {
        if (!isset($item['id'])) {
            $category = WhoLikes::create($item);
        } else {
            $category = WhoLikes::find($item['id']);
            $category->update($item);
            $category = $category->fresh();
        }
        return $category->id;
    }

}
