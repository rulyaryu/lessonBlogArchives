<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function actionIndex(Request $request)
    {
        return view('pages.home', [
            'articles' => News::paginate(config('app.itemsPerPage')),
        ]);
    }
}
