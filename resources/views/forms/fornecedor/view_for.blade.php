
<form class="col s12" id="form1" name="form1" method="post" action="{{ route('fornecedor_insert') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {{--  <input type="hidden" name="_method" value="POST">  --}}

      <div class="row">
            <div class="input-field col s6">
                  <input id="for_nome" type="text" name="for_nome" class="validate">
                  <label for="for_nome">Nome do Fornecedor</label>
            </div>

            <div class="input-field col s6">
                  <input id="for_cnpj" type="tel" name="for_cnpj" class="validate">
                  <label for="for_cnpj">CNPJ</label>
                  {{-- pattern="[0-9]{10}" --}}
            </div>
      </div>

      <div class="row">
            <div class="input-field col s6">
                  <input id="for_ender" type="text" name="for_endereco" class="validate">
                  <label for="for_ender">Endereço</label>
            </div>

            <div class="input-field col s6">
                  <input id="for_tel" type="tel" name="for_telefone" class="validate">
                  <label for="for_tel">Telefone</label>
            </div>
      </div>

      <div class="row">
            <div class="input-field col s6">
                  <input id="for_email" type="email" name="for_email" class="validate">
                  <label for="for_email">Email</label>
            </div>

            <div class="btn-adicionar input-field col s4 push-s2">
                  <button id="add_for" class="btn light-green" onclick="Materialize.toast('Cadastrado com sucesso!', 4000)">
                        Cadastrar
                        <i class="material-icons right">add_circle</i>
                  </button>
            </div>
      </div>

      <div class="row">
            
      </div>

</form>

<div class="teste">
      @include('forms.fornecedor.listar_for')
</div>