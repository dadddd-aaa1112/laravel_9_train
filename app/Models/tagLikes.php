<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tagLikes extends Model
{
    use HasFactory;


    protected $guarded = false;

    public function likes() {
        return $this->belongsToMany(Likes::class, 'likes_tag_likes', 'likes_id', 'tag_id');
    }
}
