@extends ('home') 

@section('links')


<div class="paleta-titulo">
    <p class="titulo-interno"> Movimentação do Estoque</h6>
</div>
<form action="" class="center">

 

   <div class="row ">
      <div class="input-field col s3 offset-s2">
         <select name="selecao">
            <option value="" disabled selected>Municipio</option>
            <option value="" >Somessome</option>
            <option value="" >Voali</option>
         </select>
         <label>Município Solicitante</label>
      </div>

      <div class="input-field col s3 push-s1">
          <input id="resp" type="text" class="validate">
          <label for="resp">Responsável pela solicitação</label>
      </div>

      <div class="input-field col s3 offset-s2">
          <input id="qtd" type="text" class="validate">
          <label for="qtd">Quantidade solicitada</label>
      </div>      

      <div class="input-field col s3 push-s1">
         <input type="text" class="datepicker">
         <label for="datepicker">Data de saída</label>
      </div>
      
   </div>  

   <div class="row">
        <div class="input-field col s7 push-s2">
          <input id="observacao" type="text" class="validate" data-length="120">
          <label for="observacao">Observação</label>
        </div>

        
    </div>

    <div class="btn-confirmar">
        <button id="confirmar" class="btn waves-effect waves-light light-green" type="buttom">
            Confirmar
        </button>	
	</div>
 

</form>


@endsection