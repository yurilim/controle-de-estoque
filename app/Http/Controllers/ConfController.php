<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoEquipamento;

class ConfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_equipamento = TipoEquipamento::all(); 
        return view('conf.index', compact('tipo_equipamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tipo_equipamento = new TipoEquipamento();
        $tipo_equipamento->tie_nome = $request->tie_nome;
        $tipo_equipamento->save();

        return redirect()->route('index')->with(['sucess' => 'Cadastro suave']);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_equipamento = TipoEquipamento::findOrFail($id);
        return view('conf.edit', compact('tipo_equipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $tipo_equipamento = $request->all();

        $id = TipoEquipamento::findOrFail($id); 
        $id->update($tipo_equipamento);
        
        return redirect()->route('index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoeqp_id = TipoEquipamento::findOrFail($id);   
        $tipoeqp_id->delete($id);
        return redirect()->route('index');
    }
}
