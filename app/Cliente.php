<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{

        public $timestamps = false;
        protected $fillable = ['nome', 'endereco', 'telefone'];

        public function Produtos(){
            return $this->hasMany(Produto::class);
        }
}
