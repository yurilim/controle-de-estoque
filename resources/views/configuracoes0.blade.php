@extends('home')

@section('links')



    <div class="row">
        <div class="paleta-titulo">
            <p class="titulo-interno"> Cadastrar / Atualizar / Excluir</p>
        </div>
        
        <div class="col s7 push-s2">

            <div class="row">
                <div class="col s12">
                    <ul id="tabs-swipe" class="tabs">
                        <li class="tab col s3 ">
                            <a class="active" href="#fornecedor">FORNECEDOR</a>
                        </li>
                        <li class="tab col s3">
                            <a href="#cliente">CLIENTES</a>
                        </li>
                        <li class="tab col s4">
                            <a href="#tipo_equip">TIPO DE EQUIPAMENTO</a>
                        </li>
                        <li class="tab col s2">
                            <a href="#locais">LOCAIS</a>
                    </ul>

                    <div class="modify-row">
                        <div id="fornecedor" class="col s12">
                            @include('forms.fornecedor.view_for')
                        </div>
                        <div id="tipo_equip" class="col s12">
                            @include('forms.tipo_equipamento.cadastrar')
                        </div>
                        <div id="cliente" class="col s12">
                            @include('forms.clientes')
                        </div>
                        <div id="locais" class="col s12">
                            @include('forms.locais')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection