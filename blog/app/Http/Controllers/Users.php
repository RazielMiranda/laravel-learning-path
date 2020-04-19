<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{

	//Retornando dados para a view
    function index()
    {
    	return ['name'=>'Raziel M.'];
    }

    //pegando dados que vem da view e exibindo ele
    function show($id)
    {
    	return "o seu id é = ".$id;
    }

    //Retornando view, e enviando dado do controller para a view
    function sample()
	{
		return view('sample',['name'=>'Raziel M.']);
	}

}
