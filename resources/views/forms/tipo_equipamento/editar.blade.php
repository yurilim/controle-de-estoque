@extends('layout.aplication') 
@section('content')

<div class="row">

    <div class="paleta-titulo">
        <p class="titulo2"> Editar Tipo de Equipamento</p>
    </div> 

    <form class="col s12" method="post" action="{{ url('/tEqp_edit', $tipo_equipamento->tie_id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="row">
            <input type="hidden" name="tipo_id" value="{{ $tipo_equipamento->tie_id }}" />

            <div class="input-field col s3">
                <input id="tipo_eqp" type="text" name="tie_nome" class="validate" value="{{ $tipo_equipamento->tie_nome }}">
                <label for="tipo_eqp">Tipo de Equipamento</label>
            </div>
        </div>

        <div class="row">
            <div class="btn-adicionar input-field col s4">
                <button id="add_for" type="submit" class="btn light-green">
                    Atualizar
                    <i class="material-icons right">add_circle</i>
                </button>
            </div>
        </div>
    </form>

</div>

@endsection

