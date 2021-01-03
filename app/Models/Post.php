<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Reply;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['post_title', 'post_content', 'image_attachment', 'user_id'];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function replies()
    {
        return $this->hasMany(Reply::class);
    }

    function tags() {
        $this->hasMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
