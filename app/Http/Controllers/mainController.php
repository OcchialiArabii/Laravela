<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function show()
    {
        $name = "booster";
        $price = 2.99;

        return view("main")
                ->with("name",$name)
                ->with("price",$price);

    }
}
