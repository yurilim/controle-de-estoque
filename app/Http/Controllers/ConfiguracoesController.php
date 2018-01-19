<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoEquipamento;
use App\Fornecedor;

class ConfiguracoesController extends Controller
{
    //chamar pagina de configuração
    public function listar(){

        $tipo_equipamento = TipoEquipamento::all(); 
        $fornecedor = Fornecedor::all();
       
        return view("configuracoes", compact('tipo_equipamento', 'fornecedor'));
    }


}

