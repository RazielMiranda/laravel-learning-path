<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task extends Controller
{
    
	function index(Request $req)
	{

		$req->session()->flash('status', 'deu certo!');
		return redirect('task');
	}

}
