<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::latest()->take(5)->get();
        return view('home', compact('categories', 'articles'));
    }

    public function about()
    {
        return view('about');
    }
}
