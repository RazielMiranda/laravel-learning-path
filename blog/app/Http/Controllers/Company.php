<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Users;

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

    // function update(Request $req)
    // {   

    //     echo Produto::where('id', $req->iduser)
    //     ->update(['nome_produto' => $req->nomeuser]);
        
    //     //Outra forma de fazer update
    //     $update = Produto::find($req->id);
    //     $update->nome_produto=$req->nomeuser;
    //     $update->save();
    // }

//    function delete(Request $req)
//     {   
//         $delete = Produto::find($req->iduser);
//         echo $delete->delete();

//         Assim se deleta um array todo
//         Produtos::destroy(1,4);
//     }

        function find()
        {
            return Users::find(2)->myCompany;
        }

}
