<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Return author of that post.
     *
     * @return User
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
