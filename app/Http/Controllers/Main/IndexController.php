<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
     
         $products = Product::all();

         $categories = Category::all();

        return view('main.index', compact('products', 'categories')); 
    }

}
