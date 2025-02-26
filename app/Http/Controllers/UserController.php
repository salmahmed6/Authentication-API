<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function createRandomUser(Request $request)
    {
        $user = User::create([
            "name" => "salma",
            "email" => "salma@gmail.com",
            "password" => "1234567"
        ]);
        return $user;
    }
}
