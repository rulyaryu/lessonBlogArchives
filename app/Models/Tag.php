<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Models\Category;

class Tag extends Model
{
    public function news() {
        $this->belongsToMany(News::class);
    }

    public function categories() {
        $this->belongsToMany(Category::class);
    }

}
