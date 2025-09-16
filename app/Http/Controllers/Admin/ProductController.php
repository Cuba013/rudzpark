<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|nullable|max:2048',
            'price' => 'required|numeric',
            'categories' => 'required|array',
            'rating' => 'nullable|numeric|between:0,10',
            'available' => 'boolean',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->rating = $request->rating;
        $product->available = $request->has('available');

        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images/products', 'public');
        }

        $product->save();

        $product->categories()->attach($request->categories);

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|nullable|max:2048',
            'price' => 'required|numeric',
            'categories' => 'required|array',
            'rating' => 'nullable|numeric|between:0,10',
            'available' => 'boolean',
        ]);

        $product->title = $request->title;
        $product->price = $request->price;
        $product->rating = $request->rating;
        $product->available = $request->has('available');

        if ($request->hasFile('image')) {
            // Удаление старого изображения, если оно есть
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('image')->store('images/products', 'public');
        }

        $product->save();

        $product->categories()->sync($request->categories);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Удаление изображения из хранилища
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
