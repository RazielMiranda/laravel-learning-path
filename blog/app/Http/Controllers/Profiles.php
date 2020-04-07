<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Somente se for laravel 7 <
use Illuminate\Support\Facades\Http;


class Profiles extends Controller
{
    
	function list()
	{
		return Http::get('https://jsonplaceholder.typicode.com/posts')->body();
	}

}
