<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function index()
    {
    	return ['name'=>'Raziel M.'];
    }

    function show($id)
    {
    	return "o seu id é = ".$id;
    }

}
