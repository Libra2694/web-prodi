<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::published()->latest()->paginate(6);
        $popularNews = News::published()->orderBy('hits', 'desc')->take(5)->get();
        
        return view('news.index', compact('news', 'popularNews'));
    }

    public function show(News $news)
    {
        $news->incrementHits();
        $relatedNews = News::published()->where('id', '!=', $news->id)->take(3)->get();
        
        return view('news.show', compact('news', 'relatedNews'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $news = News::published()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->latest()
            ->paginate(6);
            
        return view('news.search', compact('news', 'query'));
    }
}

