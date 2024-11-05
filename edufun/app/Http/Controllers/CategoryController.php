<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $courses = Course::where('category_id', $id)->get();
        return view('category.show', compact('category', 'courses'));
    }
}
