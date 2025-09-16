<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Убедитесь, что переданные данные корректные
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $categoryData = $request->only(['title', 'description', 'parent_id']);

        // Обработка загрузки изображения
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/categories', 'public'); // Сохранение изображения
            $categoryData['image'] = $imagePath; // Сохранение пути к изображению
        }

        // Создание категории
        Category::create($categoryData);

        return redirect()->route('admin.categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id); // Получение категории по ID
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string', // Добавляем валидацию для описания
            'parent_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = Category::findOrFail($id);

        $categoryData = $request->only(['title', 'description', 'parent_id']);

        // Обработка загрузки изображения
        if ($request->hasFile('image')) {
            // Удалите старое изображение, если необходимо
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $imagePath = $request->file('image')->store('images/categories', 'public'); // Сохранение изображения
            $categoryData['image'] = $imagePath; // Сохранение пути к изображению
        }

        // Обновление категории
        $category->update($categoryData);

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
