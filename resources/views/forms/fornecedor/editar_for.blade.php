@extends('layout.aplication') @section('content')

    <div class="paleta-titulo">
        <p class="titulo2"> Editar Fornecedor</p>
    </div>
    <br>
    <br>
    <br>
    <form class="col s12" method="POST" action="{{ url('/fornecedor_edit', $fornecedor->for_id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <div class="row">
            <input type="hidden" name="for_id" value="{{ $fornecedor->for_id }}" />

            <div class="input-field col s4">
                <input id="for_nome" type="text" name="for_nome" class="validate" value="{{ $fornecedor->for_nome }}">
                <label for="for_nome">Nome do Fornecedor</label>
            </div>

            <div class="input-field col s4">
                <input id="for_cnpj" type="tel" name="for_cnpj" class="validate" value="{{ $fornecedor->for_cnpj }}">
                <label for="for_cnpj">CNPJ</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                <input id="for_ender" type="text" name="for_endereco" class="validate" value=" {{ $fornecedor->for_endereco }} ">
                <label for="for_ender">Endereço</label>
            </div>

            <div class="input-field col s4">
                <input id="for_tel" type="tel" name="for_telefone" class="validate" value=" {{ $fornecedor->for_telefone }} ">
                <label for="for_tel">Telefone</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                <input id="for_email" type="email" name="for_email" class="validate" value="{{ $fornecedor->for_email }}">
                <label for="for_email">Email</label>
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

@endsection