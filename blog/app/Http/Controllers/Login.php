<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{

	function index(Request $req)
	{
		// $req->session()->get('data');

		$req->session()->put('sessionData', $req->input());
		return redirect('profile');
	}

}
