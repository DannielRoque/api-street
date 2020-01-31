<?php

namespace App\Http\Controllers;

use App\Produto;

class ProdutosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Produto::class;
    }
}
