
<form class="col s12" name="form2" method="post" action="/clientes">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="row">
      <div class="input-field col s6">
         <input id="cli_nome" type="text" name="mun_nome" class="validate">
         <label for="cli_nome">Nome do Municipio</label>
      </div>

      <div class="input-field col s6">
         <input id="cli_cnpj" type="tel" pattern="[0-9]{10}" name="mun_cep" class="validate">
         <label for="cli_cnpj">CEP</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6">
         <input id="cli_ender" type="text" name="mun_endereco" class="validate">
         <label for="cli_ender">Endereço</label>
      </div>

      <div class="input-field col s6">
         <input id="cli_tel" type="tel" name="mun_telefone" pattern="[0-9]{10}" class="validate">
         <label for="cli_tel">Telefone</label>
      </div>
   </div>

   <div class="row">
      <div class="input-field col s6">
         <input id="cli_email" name="mun_email" type="email" placeholter="exemplo@provedor.com.br" class="validate">
         <label for="cli_email">Email</label>
      </div>
   </div>

</form>