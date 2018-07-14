<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Models\Tag;

class Category extends Model
{
    public function news()
    {
        return $this->belongsToMany(News::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
