<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Newscategory;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $title = '';
        if (request('newscategory')) {
            $newscategory = Newscategory::firstWhere('slug', request('newscategory'));
            $title = $newscategory->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by ' . $author->name;
        }

        return view('news', [
            "title" => $title,
            "active" => "News",
            "lotNews" => News::latest()->filter(request(['search', 'newscategory', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function readnews(News $news)
    {
        return view('readNews', [
            "title" => "Single News",
            "news" => $news,
            "active" => "News",
        ]);
    }
    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            "active" => "categories",
            'categories' => Newscategory::all(),
        ]);
    }
}