<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class Company extends Controller
{
    // function save(Request $req)
    // {   
    //     // print_r($req->input());
    //     $produto = new Produto;
    //     $produto->quantidade = $req->quantidade;
    //     $produto->nome_produto = $req->nome;
    //     $produto->id_user = $req->id_user;

    //     echo $produto->save();
    // }

    function update(Request $req)
    {   

        echo Produto::where('id', $req->iduser)
        ->update(['nome_produto' => $req->nomeuser]);
        
    }

}
