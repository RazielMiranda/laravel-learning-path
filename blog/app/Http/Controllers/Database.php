<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;

class Database extends Controller
{
	// function select()
	// {
		//Select simples todos os dados
		//return DB::select('select * from user1');

		//Select em uma table  traz todos os dados
		// return DB::table('user1')->get();

		//Select com where
		// return DB::table('user1')
		// ->where('nome','raziel miranda')
		// ->get();

		//Contagem de registros na tabela
		// $data = DB::table('user1')->count();

		//Primeiro registro
		// $data = DB::table('user1')->first();

		//Procura o id pelo número dentro do metodo
		// $data = DB::table('user1')->find(2);
		//print r para ver os resultados
		// print_r($data);
	//}

	// function delete()
	// {
		//delete simples, sem o where apaga tudo
		// $data = DB::table('user1')
		// ->where('nome','raziel miranda')
		// ->delete();
		 //print_r($data);
	// }

	// function insert()
	// {
	// 		$insertRandom = time();
	// 		$data = DB::table('user1')
	// 		->insert(
	// 			[
	// 				'nome'=> $insertRandom,
	// 			]
	// 		);
	
	// 		print_r($data);
	// }

	//function update()
	//{
			// $data = DB::table('user1')
			// ->where('id',2)
			// ->update(
			// 	[
			// 		'nome'=> 'alterado pelo denvo!',
			// 	]
			// print_r($data);
	        // );
	//}

	// function selectJoin()
	// {
	// 	$data = DB::table('user1')
	// 	->select('user1.nome','produtos.quantidade')
	// 	->join('produtos','user1.id','produtos.id_user')
	// 	//->leftjoin('produtos','user1.id','produtos.id_user')
	// 	//->rightjoin('produtos','user1.id','produtos.id_user')
	// 	->where('nome','igor pereira')
	// 	->get();
	// 	echo "<pre>";
	// 	print_r($data);
	// }

	function selectView()
	{
		//Retorna todos os dados
		// return Produto::all();

		//Retorna com where
		//return Produto::where('id', 5)->get();

		//Retorna com where
		// return Produto::find(6);

		//Retorna com where
		//return Produto::max('id');

		//return Produto::min('id');
		//return Produto::sum('id');
		// return Produto::avg('id');

	}

}
