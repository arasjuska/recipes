<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;

class PageController extends Controller
{
    public function homePage()
    {
        $recipes = Recipe::with('category:id,title,slug')->limit(12)->get();
        return view('welcome', compact('recipes'));
    }

    public function categoryPage($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $recipes = $category->recipes()->orderBy('created_at', 'desc')->paginate(12);
        return view('guest.category', compact('category', 'recipes'));
    }

    public function singleRecipePage($slug) {
        Recipe::where('slug', $slug)->increment('views');
        $recipe = Recipe::where('slug', $slug)->firstOrFail();
        return view('guest.single', compact('recipe'));
    }
}
