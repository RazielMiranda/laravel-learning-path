<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

	function account(Request $req)
	    {

	    	//Aqui voce consegue ver as info do cabeçalho e tem outros metodos que podem ajudar
	    	//echo $req->path();
	    	//echo $req->method();

	    	//Pegando todos os input do formulario quando via post
	    	// return $req->input();

	    	//Caso queira apenas um campo do formulario quando via post
	    	//return $req->input('email');

	    	//Pegando dados do form quando via get
	    	return $req->query();


	    }    

}
