<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\UserController;
use Illuminate\Http\Controllers\ArticleController;
use App\Http\Middleware\IsTarmeezUser;
use Illuminate\Http\Request;



Route::middleware('auth:sancutm')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/api", function () {
    return "hello api";
});

Route::post("/hello", function (Request $request) {
    $name = $request->input("name");
    return response()->json(["message" => "hello $name"]);
    //return response()->json(["data" => "post request to hello"]);
});

Route::delete("/hello", function () {
    return response()->json(["data" => "delete request to hello"]);
});

Route::put("/hello", function () {
    return response()->json(["data" => "put request to hello"]);
});

Route::patch("/hello", function () {
    return response()->json(["data" => "patch request to hello"]);
});


Route::post('/createRandomUser', UserController::class, 'createRandomUser');

Route::post('/createArticle', ArticleController::class, 'createArticle');

Route::get('/getArticles', ArticleController::class, 'getArticles');

Route::get('/getArticle/{id}', ArticleController::class, 'getArticleById');

Route::delete('/deleteArticle/{id}', ArticleController::class, 'deleteArticle');

Route::put('/updateArticle/{id}', ArticleController::class, 'updateArticle');

Route::post('/register', UserController::class, 'register');

Route::post('/login', UserController::class, 'login');
