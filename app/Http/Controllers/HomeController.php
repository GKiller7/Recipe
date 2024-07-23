<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('name')
            ->get();

        return view('home.index')->with([
            'categories' => $categories
        ]);
    }
}
