<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function nav()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('includes.nav', compact('categories'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category', 'categories'));
    }
}
