<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.sidebar', function ($view) {
            $view->with('categories', Category::orderBy('title')->get());
            $view->with('popular_recipes', Recipe::orderBy('views', 'desc')->limit(3)->get());
        });

        Paginator::useTailwind();
    }
}
