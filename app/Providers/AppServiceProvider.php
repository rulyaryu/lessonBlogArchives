<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('pages.sidebar', function ($view) {
            $view->with('categories', Category::all());
            $view->with('tags', Tag::all());
            $view->with('popular', News::orderBy('viewsCount', 'desc')
                    ->take(config('app.popularCount'))
                    ->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
