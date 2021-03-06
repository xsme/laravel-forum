<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * Return posts for that topic.
     *
     * @return Post
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Return author of that topic.
     *
     * @return User
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
