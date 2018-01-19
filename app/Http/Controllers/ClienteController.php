<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipios;

class ClienteController extends Controller
{
    public function create(){
        return view('config-munms.clientes');
    }

    public function store(Request $request){

        // $input = $request->all();
        // municipio::create($input);
        // return redirect()->back();
        $municipio = new Municipio();
        $municipio->mun_nome = $request->mun_nome;
        $municipio->mun_cep = $request->mun_cnpj;
        $municipio->mun_endereco = $request->mun_endereco;
        $municipio->mun_telefone = $request->mun_telefone;
        $municipio->mun_email = $request->mun_email;

        $municipio->save();

        // return redirect()-> back();
        return view("configuracoes", compact('municipio'));

    }

    public function show($id){
        
    }


    public function update(Request $request, $id){


    }
   
    public function delete(Request $request, $id){

        $municipio = new municipio();
        $municipio->delete();

        return ;
        
    }
}
