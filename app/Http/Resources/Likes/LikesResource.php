<?php

namespace App\Http\Resources\Likes;

use App\Http\Resources\TagLikes\tagLikesResource;
use App\Http\Resources\WhoLikes\WhoLikesResource;

use Illuminate\Http\Resources\Json\JsonResource;

class LikesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
            'who likes' => new WhoLikesResource($this->whoLikes),
            'tags' => $this->tag
        ];
    }
}
