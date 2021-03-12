<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function category($slug = ""){
        if ($slug){
            $category = Category::where('slug', $slug)->first();
            return view('site.category', [
                'category' => $category,
                'articles' => $category->articles()->where('published', 1)->paginate(12)
            ]);
        }
        return redirect(route('home'));
    }
}
