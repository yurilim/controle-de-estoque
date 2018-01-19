

<form class="col s12" id='form3' name="form3" method="post" action="{{ route('tEquipamento_insert') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="input-field col s6">
            <input id="tipo_eqp" type="text" name="tie_nome" class="validate">
            <label for="tipo_eqp">Tipo de Equipamento</label>
        </div>
    </div>

    <div class="row">
        <div class="btn-adicionar input-field col s4">
            <button id="add_for" class="btn light-green" onclick=" Materialize.toast('Cadastrado com sucesso!', 4000)">
                Cadastrar
                <i class="material-icons right">add_circle</i> 
            </button>
        </div>
    </div>

</form>

<div>
    @include('forms.tipo_equipamento.listar')
</div>