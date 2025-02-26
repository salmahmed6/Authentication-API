<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function createArticle(Request $request)
    {
        $article = Article::create([
            "title" => "article title",
            "body" => "salma"
        ]);
        return $article;
    }
}
