<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->increment('views');
        return view('detail', compact('article'));
    }

    public function popular()
    {
        $articles = Article::orderBy('views', 'desc')->paginate(3);
        return view('popular', compact('articles'));
    }
}
