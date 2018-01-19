<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function inserir(Request $request){

        // print_r($request->all());
        // die();
        $input = $request->all();
        $fornecedor = new Fornecedor();
        $fornecedor->create($input);

        return redirect()->route('index');
        // return back();

    }

    public function editar($id){

        $fornecedor = Fornecedor::findOrFail($id);
        return view('forms.fornecedor.editar_for', compact('fornecedor'));        

    }

    public function update(Request $request, $id){

        $fornecedor = $request->all();
        $id = Fornecedor::findOrFail($id);
        $id->update($fornecedor);

        return redirect()->route('index');

    }
   
    public function deletar($id, Fornecedor  $fornecedor){  
        $fornecedor->where('for_id', $id)->delete();

        return redirect()->route('index');
    }
}