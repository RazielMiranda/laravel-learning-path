<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //configurações do model
    protected $table = 'produtos';
    public $timestamps = false;

    //Acessores, apenas faz modificaões da amostra dos dados
    public function getNomeProdutoAttribute($value)
    {
        return ucfirst($value);
    }

    public function QuantidadeAttribute($value)
    {
        return $value=($value - 10);
    }
    
    //Faz modificações direto no banco, antes do dado ser salvo lá
    public function setNomeProdutoAttribute($value)
    {
        return $this->attributes['nome_produto']=ucfirst($value);
    }

}
