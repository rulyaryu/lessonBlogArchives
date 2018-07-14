<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Author extends Model
{
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
