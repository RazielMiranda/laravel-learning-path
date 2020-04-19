<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Binding extends Controller
{

    function index(Product $item)
    {
        return $item->all();
    }
    //
}
