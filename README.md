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

### Criando um novo arquivo

	entrar na pasta "resources", dentro de "views" criar um novo arquivo do tipo "blade".
	após isso ir até a pasta "routes" e dentro dessa pasta editar o arquivo "web", esse arquivo basicamente é onde você faz a construção das rotas ou seja das URL do sistema, basta copiar o modelo da rota welcome.

	<?php

	use Illuminate\Support\Facades\Route;

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*

	//Aqui diz que quando na URL tiver apenas a / vai retornar a view welcome que seria como a "index" nesse momento.

	Route::get('/', function () {
	    return view('welcome');
	});

	//Aqui se digitar /sample vai trazer a view sample.

	Route::get('/sample', function () {
	    return view('sample');
	});




