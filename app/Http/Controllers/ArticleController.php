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

    function getArticles()
    {
        $articles = Article::all();
        return $articles;
    }

    function getArticleById($id)
    {
        $article = Article::find($id);
        return $article;
    }

    function deleteArticle($id)
    {
        $article = Article::find($id);
        $article->delete();
        return "article deleted";
    }

    function updateArticle($id, Request $request)
    {
        $article = Article::find($id);
        $article->update($request->all());
        $article->save();
        return $article;
    }
}
