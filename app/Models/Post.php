<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'is_feature'
    ];

}

