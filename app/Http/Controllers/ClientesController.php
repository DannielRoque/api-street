<?php

namespace App\Http\Controllers;

use App\Cliente;

class ClientesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Cliente::class;
    }
}
