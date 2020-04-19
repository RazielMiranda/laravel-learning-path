<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Controllers\DB;
class Acessor extends Controller
{
    function index()
    {
       return Produto::all();
    }
}
