<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function actionIndex(string $slug)
    {
        $article = News::where('slug', $slug)->first();

        return view('pages.single', [
            'article' => $article
        ]);
    }

    public function actionCategory(string $slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('pages.category', [
           'category' => $category,
        ]);
    }
}
