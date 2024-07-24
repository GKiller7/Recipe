<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::get();
        return view('recipes.index', compact('recipes'));
    }

    public function show($id)
    {
        $recipe = Recipe::with('ingredients', 'steps', 'ratings')->find($id);

        if ($recipe) {
            return view('recipes.show', compact('recipe'));
        } else {
            return redirect()->route('recipes.index')->with('error', 'Tarif bulunamadı');
        }
    }
}
