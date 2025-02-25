<?php

use App\Http\Controllers\BookingController;
use App\Http\Middleware\IsTarmeezUser;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('Hello');
});

Route::get('/hello', function () {
    $val = 50;
    $name = 'salma';

    $studemts = ["Ali", "salma", "hagar", "mohamed"];
    return view('hello')->with('renderName', $name)->with('value', $val);
});

Route::get('/myBookings', BookingController::class . '@myBookings');

Route::get('/sayHello/{name}', BookingController::class . '@sayHello')->middleware(IsTarmeezUser::class);

Route::get('/login/{name}', BookingController::class . '@login');
