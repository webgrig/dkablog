<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $this->topMenu();
        if ($request->is('category/without-category*')){
            $this->articles_without_category();
        }
    }

    // Top menu for users
    public function topMenu(){
        View::composer('layouts.header', function ($view){
            $view->with('categories', Category::whereNull('parent_id')->where('published', 1)->get());
        });
    }

    // Articles without categories
    public function articles_without_category(){
        View::composer('site.category', function ($view){
            $articles_without_category = Article::leftJoin('categoryables', function ($joun){
                $joun->on('articles.id', '=', 'categoryables.categoryable_id')
                    ->whereNull('categoryable_id');
            })->where('published', 1)->paginate(10);
            $view->with([
                'category' => Category::where('slug', 'like', '%without-category%')->first(),
                'articles' => $articles_without_category,
            ]);
        });
    }
}
