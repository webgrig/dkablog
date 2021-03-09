<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        return view('admin.index', [
            'categories' => Category::lastCategories(5),
            'articles' => Article::lastArticles(5),
            'count_categories' => Category::count(),
            'count_articles' => Article::count()
         ]);
    }
}
