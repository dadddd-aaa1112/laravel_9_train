<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Likes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'likes';
    protected $guarded = [];

    public function whoLikes() {
        return $this->belongsTo(whoLikes::class, 'whoLikes_id', 'id');
    }

    public function tagLikes() {
        return $this->belongsToMany(tagLikes::class, 'likes_tag_likes', 'likes_id', 'tag_id' );
    }

}
