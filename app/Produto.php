<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
    public $timestamps = false;
    protected $fillable = ['descricao', 'quantidade', 'preco'];

    public function clientes(){
        return $this->hasMany(Cliente::class);
    }
}
