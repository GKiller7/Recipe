<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::get();

        $categories = Category::with('name')
            ->get();

        return view('home.index')->with([
            'recipes' => $recipes,
            'categories' => $categories,
        ]);
    }
}
