<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function actionIndex(Request $request)
    {

        $articles = News::All()->sortBy('created_at')->take(10);

        return view('pages.archives', [
            'articles' => $articles
        ]);
//        return 'hi from archive controller';
    }

}
