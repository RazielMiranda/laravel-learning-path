<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

	// function account(Request $req)
	//     {

	//     	//Aqui voce consegue ver as info do cabeçalho e tem outros metodos que podem ajudar
	//     	//echo $req->path();
	//     	//echo $req->method();

	//     	//Pegando todos os input do formulario quando via post
	//     	// return $req->input();

	//     	//Pegando todos os input do formulario quando via post e validando eles
	//     	// return $req->validate([
	//     	// 	'email' => 'required | min: 3 | max: 10',
	//     	// 	'password' => 'required | email'
	//     	// ]);

	//     	//Caso queira apenas um campo do formulario quando via post
	//     	//return $req->input('email');

	//     	//Pegando dados do form quando via get
	//     	// return $req->query();


	//     }   

	    function index()
	    {
	    	$id=['name' => 'raziel cansado', 'email' => 'razielx3@live.com'];
	    	return view('user', ['data'=>$id]);
	    }


}
