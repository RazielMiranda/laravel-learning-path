<?php

use Illuminate\Support\Facades\Route;

//Usando o guzzlehttp para fazer requisições de API
// use Illuminate\Support\Facades\Http;

// $resp = Http::get('https://viacep.com.br/ws/17054050/json/');

// Para enviar dados para a API
// $resp = Http::post('https://viacep.com.br/ws/17054050/json/', ['name'=>'raziel teste']);


//Declara uma variavel com a resposta do metodo
// dd($resp->body());

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rota basica
Route::get('/', function () {
    return view('welcome');
});

//Rota editada
// Route::get('/sample', function () {
//     return view('sample');
// });	

//Rota que pega dados da URL
// Route::get('/sample/{id}', function ($id) {
// 	echo $id;
//     return view('sample');
// });


//Rota de view
// Route::view('here','sample');

//Rota de redirecit 1
// Route::redirect('/','sample');

//Rota de redirect 2
// Route::get('/', function () {
//     return redirect('sample');
// });

//Chamando o metodo index do controle user atraves do parametro user na url
// Route::get('users','Users@index');

//Chamando o metodo show que no controler pega o dado que foi enviado pela URL
// Route::get('users2/{id}','Users@show');

//Chamando o metodo sample que retorna a view que esta no controller
// Route::get('users','Users@sample');

//Setando o valor da variavel {{$name}} que esta na view atraves da rota
// Route::view('sample','sample',['name'=>'igor']);

//Chamando uma view que esta em outro diretorio
// Route::view('nav.sample','sample',['name'=>'igor']);

//Chamando o componente Example
// Route::view('example','example');

//Mandando dados para o componente a partir da rota
// Route::get('/sample', function () {
//     return view('sample', ['name'=>'raziel foda']);
// });	

//Criando rota para a vire do form de user
Route::view('userview', 'user');

//Mandando via post, lembrando que a action do form tem que bater com o nome da rota daqui
//Route::post('userscontroller','UsersController@account');

//Mandando via get, lembrando que altera o metodo do form e do controler
Route::post('userscontroller','UsersController@account');











