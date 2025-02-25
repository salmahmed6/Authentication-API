<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseContoller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseContoller
{
    use AuthorizesRequests, ValidatesRequests;

    function myBookings()
    {
        return "my bookings";
    }
}
