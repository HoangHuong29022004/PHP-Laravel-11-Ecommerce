<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $categories = Category::with([
                'products' => function ($query) {
                    $query->inRandomOrder()->limit(1);
                }
            ])->get();
            $view->with('categories', $categories);
        });
        Paginator::useBootstrap();

    }
}
