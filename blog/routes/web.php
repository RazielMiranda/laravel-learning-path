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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('sample');
});

// Route::get('/sample/{id}', function ($id) {
// 	echo $id;
//     return view('sample');
// });

// Route::view('here','sample');

// Route::redirect('/','sample');

// Route::get('/', function () {
//     return redirect('sample');
// });

Route::get('users','Users@index');
Route::get('users2/{id}','Users@show');






