<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'tag_count'];

    function posts() {
        $this->hasMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }
}
