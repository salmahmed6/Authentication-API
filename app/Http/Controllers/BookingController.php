<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //

    function myBooking(Request $request)
    {
        return $request->all();
    }

    function login()
    {
        return '<h1>Login Page</h1>';
    }

    function sayHello($n)
    {
        //return view('welcomePage')->with('requestedName', $n);
        $isAuthenticated = true;
        if ($n == "Tarmeez") {
            $isAuthenticated = true;
        } else {
            $isAuthenticated = false;
        }


        if ($isAuthenticated) {
            return response()->json(["data" => ["name" => $n]]);
        } else {
            return back();
        }
    }


    function sayWelcome($n)
    {
        //return view('welcomePage')->with('requestedName', $n);

        $isAuthenticated = true;
        if ($n == "Tarmeez") {
            $isAuthenticated = true;
        } else {
            $isAuthenticated = false;
        }


        if ($isAuthenticated) {
            return response()->json(["data" => ["name" => $n]]);
        } else {
            return response()->json(['error' => "Not Authenticated"], 401);
        }
    }

    // private function isLoggedIn($n)
    // {
    //     $isAuthenticated = true;

    //     if ($n == "Tarmeez") {
    //         $isAuthenticated = true;
    //     } else {
    //         $isAuthenticated = false;
    //     }
    // }
}
