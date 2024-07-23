<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $recipes = $category->recipes;
        return view('category_show', compact('category', 'recipes'));
    }
}
