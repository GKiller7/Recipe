<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use http\Env\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category', compact('categories'));

    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $recipes = $category->recipes;
        return view('category_show', compact('category', 'recipes'));
    }
}

// saaaalaaam molllim commitler bet gerek
