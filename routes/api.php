<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsTarmeezUser;


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
