<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produtos';
    public $timestamps = false;

    public function getNomeProdutoAttribute($value)
    {
        return ucfirst($value);
    }

    public function getQuantidadeAttribute($value)
    {
        return $value=($value - 10);
    }

}
