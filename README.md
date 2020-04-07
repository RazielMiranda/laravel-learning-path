# Laravel 7 tutorial

Tutorial de como utilizar o Laravel 7 seguindo o vídeo do canal PHP STEP BY STEP:

https://www.youtube.com/watch?v=694SP68iy-o&list=PL8p2I9GklV46twRyl207h5LcsdjB9S9B0

## 1. Instalação
    
    instalar composer: https://getcomposer.org/download/

    instalar o instalador do laravel pelo composer deixando assim mais rápido a criação de novos projetos pois armazena no cache do sistema.
		composer global require laravel/installer
		depois testar digitando no cmd "laravel"

    Para criar o projeto digite na pasta desejada
    	laravel new "nome do projeto"
    	Após isso entrar na pasta do projeto e digitar "php artisan serve" uma url aparecera no prompt
    	http://127.0.0.1:8000/

### Estrutura de diretorios

	Onde se escreve:	Html (dir views)
							- Quando se quer criar novas páginas
	                	Model (dir app)
	                		- Onde se meche com o banco de dados
	                	Controller (dir app)
	                		- Onde se cria os controladores da aplicação
	                	Routing (dir routes)
	                		- Onde se cria rotas de URL e rotas de api
	                	File store (dir storage)
	                		- Onde se guarda imagens de usuario etc
	                	Config
	                		- Configuração direto no core do laravel (sessão, conexão com o banco etc)pode ser alterado pelo arquivo .env também.
	                	Dependency File
	                		- Composer.json onde se carrega todas as dependencias do projeto para fazer,
	                		ele funcionar.

## Rotas (Routes)

O que são rotas?

Quando voce cria qualquer página no Laravel e deseja mostrar essa página.

Como fazer roteamento?

1. Primeiro se deve criar uma página do tipo blade em views.
2. Depois se deve abrir o arquivo web em routes, o arquivo web é onde se edita as rotas existem algumas forma de se escrever as rotas:

		//Escrevendo a rota da URL no primeiro parametro da função
		//e o nome da view que deseje que retorne.

		Route::get('/sample', function () {
		    return view('sample');
		});

		//Com o metodo get também conseguimos mandar e recuperar dados
		Route::get('/sample/{id}', function ($id) {
			echo $id;
		    return view('sample');
		});

		//Apenas com o metodo view, a rota fica mais customizada podendo ter um nome diferente no parametro da url
		Route::view('here','sample');

		//Para linkar com uma tag de ancora se deve cria uma tag <a> dessa forma
        //Assim ela bate na rota desejada

        <a href="here"> GO TO SAMPLE PAGE</a>

        //Para fazer redirects, basta trocar o metodo view por redirect

        Route::redirect('/','sample');

        ou

		Route::get('/', function () {
		    return redirect('sample');
		});

## Controladores (Controller)

O que são controladores?

É a parte do MVC que faz a conexão do Model com as Views, na Model é onde voce pega os dados e as Views são onde voce exibe os dados o controlador esta no meio dos dois.

Como criar controllers?

	No cmd digite

	php artisan make:controller Users

	*Controllers sempre devem ser no plural

Apos rodar o comando será criado um novo controller, essa é a estrutura basica de um controller

	<?php

	namespace App\Http\Controllers; // Diversas api uteis

	use Illuminate\Http\Request;

	class Users extends Controller
	{

		//Para criar os controller é necessário criar uma função que retorne algum dado.

		//Apenas com retorno
		function index()
		{
			return ['name'=>'Raziel M.'];
		}

		//Pegando dado da URL via GET e exibindo ele
	    function show($id)
	    {
	    	return "o seu id é = ".$id;
	    }

	}

Para que possa exibir os dados desse controller é necessário fazer uma rota com a seguinte estrutura

	Route::get('users','Users@index');
	Route::get('users2','Users@show');

Quando bater nessa rota irá exibir a informação do controller que ele retornou, é possível chamar mais de uma função do controller e também pegar parametros para isso basta adicionar o parametro entre chaves

	Route::get('users/{id}','Users@show');

### Visualização (Views)

O que são views?

Se trata da visualização do projeto feitas em HTML, CSS e JS.

Como fazer views?

Dentro da pasta views que está em resources, basta criar um arquivo blade.

Para exibir a pagina pelas rotas, parametro da url e nome da view

		Route::view('sample','sample');

Para exibir pelo controller

	function sample()
	{
		return view('sample');
	}

	//Dentro das rotas chamar o controller
	Routes::('sample','Users@sample');

Como passar dados do controller para a view?

	//Dentro do controller devemos criar um metodo que faça isso algo parecido com
	function sample()
	{
		return view('sample',['name'=>'Raziel M.']);
	}

	//E dentro da view devemos exibir a variavel, essa variavel tem escopo global, dessa forma irá exibir o nome 'Raziel M. vindo do controller'
	<h1>sample page {{$name}} </h1>

	//Se eu quiser também consigo modificar essa variavel passando o valor da variavel pela rota, basta adicionar um terceiro valor na função
	Route::view('sample','sample',['name'=>'igor']);

Chamando uma view que está em outro diretorio para isso usamos '.' no primeiro parametro para mostrar onde esta o arquivo ficando assim

	//Chamando uma view que esta em outro diretorio
	Route::view('nav.sample','sample',['name'=>'igor']);

### Visualização (Views - Components)

O que são componentes?

Códigos de front-end que podem ser reutilizados dentro do projeto, como menus, rodapé, caixas de busca etc

Como criar componentes?

	php artisan make:components Header

Após a criação do componente a primeira parte vai para a pasta "app/view/components" que é onde esta a classe do componente que é onde configuramos ele. Também temos uma página de html em branco que vai para a pasta "resources/views/components" onde fazemos o front-end

Como usar componentes?

1. Criar o componente
2. Criar a view onde deseja utilizar ele
3. Criar uma rota para a view
4. Dentro da view colocar a tag do componente ficando assim?

		<x-nomedocomponente />

Com  isso o componente já vai aparecer dentro da view.

Como passar dados para o componente? Dentro da tag dele deve adicionar um atributo, no caso será o title

	<x-header title="sample page"  />

Dentro da classe dele criar uma propriedade publica e depois passar o parametro para o construtor, assim sempre que for reutilizar em outra view pode-se alterar o valor de "title" que o valor ficara diferente independente da view que utilize, ficando assim no construtor:

	    public $title;
	    public function __construct($title)
	    {
	        $this->title=$title;        
	    }

E como passar o valor direto da rota? É a mesma lógica de como se tivesse exibindo direto a váriavel ficando assim no componente:

	<x-header title="sample page"  :name="igor"/>

no construtor:

	    public $title;
	    public $name;
	    public function __construct($title, $name)
	    {
	        $this->title=$title;
	       	$this->title=$name;           
	    }

nas rotas:

	Route::view('sample','sample',['name'=>'igor']);

Assim exibirá o dado que vem da rota na view do componente.

## Metodos HTTP e formulários

Os metodos HTTP são todos os tipos de requisição que temos na internet, POST vai junto com os cabeçalhos do header de requisições sendo apenas descriptografado no servidor, já GET é mandado diretamente pela URL como parametro de query e sendo visivél para o usuario. Dentro do laravel conseguimos ver informações do header usando alguns metodos como:

	echo $req->path(); //retorna o caminho da URL
	echo $req->method(); //retorna se é post ou get

Como criar formulários no laravel?

1. Se deve criar um formulário na view, nesse formulário a action dele deve ir para o controller que irá tratar dele, e definir o metodo dele (POST ou GET)

2. Na criação do controller deve ser um controller do tipo request, ficando algo assim dependendo do metodo que for utilizar e o que quer que aconteça com os dados vindos do seu form:

		function account(Request $req)
	    {

	    	// Pegando todos os input do formulario quando via post
	    	return $req->input();

	    	// Pegando todos os input do formulario quando via post e validando eles
	    	return $req->validate([
	    		'email' => 'required | min: 3 | max: 10',
	    		'password' => 'required | email'
	    	]);

	    	// Caso queira apenas um campo do formulario quando via post
	    	return $req->input('email');

	    	// Pegando dados do form quando via get
	    	return $req->query();

	    }   

3. Depois se deve criar uma rota de visualização desse formulário
4. Em seguida uma rota de envio de dados sendo algo assim:

		//Mandando via post, lembrando que a action do form tem que bater com o nome da rota daqui
		Route::post('userscontroller','UsersController@account');

		//Mandando via get, lembrando que a action do form tem que bater com o nome da rota daqui
		Route::get('userscontroller','UsersController@account');


5. Em seguida adicionar o csrf senão irá dar página expirada para isso dentro do form adicionar

			{{@csrf_field()}}


6. Metodos HTTP (HTTP Client "guzzlehttp") nova feature

Fazer requisições de API em json:

	//Usando o guzzlehttp para fazer requisições de API
	use Illuminate\Support\Facades\Http;

	$resp = Http::get('https://viacep.com.br/ws/17054050/json/');

	// Para enviar dados para a API
	$resp = Http::post('https://viacep.com.br/ws/17054050/json/', ['name'=>'raziel teste']);

	//Declara uma variavel com a resposta do metodo
	dd($resp->body());

7. Validação de formulários

Para validar usamos o metodo validate dentro da função de request, o metodo validate tem diversos parametro para ajudar a definiar o que queremos de fato validar, dentro da função de request escreva algo parecido com isso dependendo do que deseja:

		function account(Request $req)
	    {

	    	// Pegando todos os input do formulario quando via post e validando eles
	    	return $req->validate([
	    		'email' => 'required | min: 3 | max: 10',
	    		'password' => 'required | email'
	    	]);

	    } 

No HTML digite a variavel global:

	$errors->any();

Para validar em forma de lista:

	@if($errors->any())
	<div>
		<ul>
			@foreach($errors->all() as $err)
			<li>{{$err}}</li>
			@endforeach
		</ul>
	</div> 
	@endif

## Blade template

O que são blade template? São páginas providas pelo Laravel para poder escrever PHP, até se pode utilizar a sintaxe do php comum mas elas são substituidas por '@' e '{{}}'

	@ = usado para escrever condicionais de lógica, repeticação chamar metodos etc...

	{{}} = Usado para exibir variaveis

Como criar uma página blade?

1. Criar o arquivo em 'resources/views' nomedapagina.blade.php
2. Criar uma rota ou um controller que exiba essa view

		//via controller
		function index()
		{
			return view('nomedapagina');
		}

		Route::get('nomedapagina','nomeDoController@index');

		//via rota
		view('nomedapagina','nomedoparametrodeurl');

Como exibir variaveis em uma página blade?

1. Para exibir variaveis na pagina blade dentro do controller definir o que quer que seja exibido:

		function index()
		{
			$QueroExibir = ['name'=>'Raziel M.'];
			return view('nomedapagina','['name' => '$QueroExibir' ]');
		}

2. Dentro do blade chamar a variavel:

		{{$QueroExibir}}

Como fazer condicionais?

	@if($data['name'] == 'Raziel M.')
		<h1>To cansado</h1>
	@else
		<h2>mudou de pessoa</h2>
	@endif

Como fazer for each?

	@foreach ($data as $key => $item)
		<h3>{{$item}}</h3>
		<h2>{{$key}} : {{$item}}</h2>
	@endforeach

Como fazer for?

	@for($i=0; $i<10; $i++)
		<h1>o valor é : {{$i}}</h1>
	@endfor

Usando CSRF token e PUT:

		{{@csrf_field()}}
		@method('PUT');

Usando include:

		@include('welcome');

### Blade template layout

Reutilizar páginas de blade em outras páginas, com um layout padrão de CSS e etc assim como de JS também basicamente um blade template é voce definir todos os estilos dentro de uma determinada view e depois voce ir apenas trocando o miolo ou o "conteudo" , como fazer isso?

1. Criar a página de layout e as respectivas páginas que vão usar ela, uma página de layout fica assim:

		<!DOCTYPE html>
		<html>
		<head>

			//Variavel yield
			<title> @yield('title') - page</title>

		</head>
		<style type="text/css">
			.header{
				color: green;
			}

			.content{
				color: blue;
			}
		</style>
		<body>
			<div class="header">
				
				//Nome da sessão que depois é chamada na página que vai usar
				@section('header')
				<h1>header is common</h1>
				@show

			</div>

			<div class="content">

				//Nome da sessão que depois é chamada na página que vai usar
				@section('content')

				@show //Metodo para mostrar na outra página
			</div>

		</body>
		</html>


2. Criar as devidas rotas para as views que vão utilizar o template

3. Para estender a página de layout em outras se usa o metodo @extends, basta colocar na view que deseja que receba o conteudo da página de layout

		@extends('layout')

4. Para definir o valor do campo @yield se usa:

		@section('title','Home') //1 parametro Nome da variavel do yield, 2 parametro valor 

5. Para usar o 'layout' mas apenas mudar o conteúdo dele se usa:

		@section('content')
			"Aqui dentro vai o conteúdo que deseja"
		@endsection

6. Para usar o 'layout' e alterar um conteudo que já existe dentro do 'layout' se usa:

		@section('header')

			@parent // Exibe o header common original

			Dessa forma altera o "header common"
		
		@endsection

## Middleware

O que são middleware?

O Middleware é apenas um mecanismo de filtragem de requisição HTTP. Ou seja, ele permite ou barra determinados fluxos de requisição que entram na sua aplicação, baseado em regras definidas.

Como criar um middleware?

1. php artisan make:middleware "nomeDoMiddleware"

Após criado se encontra em app/http/middleware

2. Registrar ele no arquivo Kernel.php

	    protected $middleware = [
	    	//Registrar aqui junto dos outros
	    ];







