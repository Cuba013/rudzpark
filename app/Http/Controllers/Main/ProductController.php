<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

     public function slider()
    {
        $products = Product::latest()->take(8)->get();
        
        return view('includes.slider', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.show', compact('product', 'categories'));
    }
}
