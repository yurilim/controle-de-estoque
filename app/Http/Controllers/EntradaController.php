<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\TipoEquipamento;

class EntradaController extends Controller
{
    public function listar_entrada(){

        //OBTER DADOS DO TIPO DE EQUIPAMENTO NO COMBOMBOX
         $tipo_equipamento = new TipoEquipamento();
         $tipo_equipamento = $tipo_equipamento::select('tie_nome')->get();

        //OBTER DADOS DO FORNECEDOR NO COMBOMBOX
        $fornecedor = new Fornecedor();
        $fornecedor = $fornecedor::select('for_nome')->get();

        return view("entrada", compact('fornecedor', 'tipo_equipamento'));
       
    }


    
    
  

   
}
