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

	Routes::('sample','Users@sample',[name]);


### Visualização (Views - Components)

O que são componentes?

Códigos de front-end que podem ser reutilizados dentro do projeto, como menus, rodapé, caixas de busca etc

Como criar componentes?

	php artisan make:components Header

## Formulários

Como criar formulários no laravel?

## Metodos HTTP

Os metodos HTTP são todos os tipos de requisição que temos na internet


### Metodos HTTP (HTTP Client "guzzlehttp")

Fazer requisições de API em json
































