<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoEquipamento;

class TipoEquipamentoController extends Controller
{

    public function inserir(Request $request){

        $tipo_equipamento = new TipoEquipamento();
        $tipo_equipamento->tie_nome = $request->tie_nome;
        $tipo_equipamento->save();

        return redirect()->route('index');
    }


    public function editar($id){

        $tipo_equipamento = TipoEquipamento::findOrFail($id);        
        return view('forms.tipo_equipamento.editar', compact('tipo_equipamento'));
    }

    public function update(Request $request, $id){
        
        $tipo_equipamento = $request->all();

        $id = TipoEquipamento::findOrFail($id); 
        $id->update($tipo_equipamento);
        
        return redirect()->route('index');
        
    }
  
    public function deletar(Request $request, $id){
   
        $tipoeqp_id = TipoEquipamento::findOrFail($id);   
        $tipoeqp_id->delete($id);
        
        return redirect()->route('index');
        
    }
}

