@extends('home') 
@section('links')

<div class="paleta-titulo">
	<p class="titulo-interno"> Nova entrada de estoque</h6>
</div>


<form action="" class="center campos-inputs">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="row ">
		<div class=" colunas-margem col s5 offset-s2">
			<select name="selecao1">
				<option value="" disabled selected>Selecione um opção</option>
				@if(isset($tipo_equipamento)) 
					@foreach($tipo_equipamento as $tie)
						<option>{{$tie->tie_nome}}</option>
					@endforeach 
				@endif

			</select>
			<label>Tipo de Equipamento</label>
		</div>

		<div class=" col s5">
			<select name="selecao2">
				<option value="" disabled selected>Selecione um opção</option>
				@if(isset($fornecedor)) 
					@foreach($fornecedor as $for)
						<option> {{$for->for_nome}}
					@endforeach 
				@endif
			</select>
			<label>Fornecedor</label>
		</div>

		<div class="input-field col s5 offset-s2">
			<select name="selecao3">
				<option value="" disabled selected>Horizon Comunicação e Interatidade</option>
			</select>
			<label>Local</label>
		</div>

		<div class="input-field col s5">
			<input id="picker" type="text" class="datepicker">
			<label for="Data de Entrada">Data de Entrada:</label>
		</div>

		<div class=" input-field col s3 push-s7">
			<input id="qtd" type="text" class="validade">
			<label for="qtd">Quantidade:</label>
		</div>
	</div>

	<div class="row ">
		
		<div class="btn-adicionar col s5 push-s7 ">
			<button id="adicionar" class="btn waves-effect waves-light light-green" type="submit">
				Adicionar
			</button>
		</div>
	</div> 

</form>


<div class="test">
	<ol id="listaOl">
		<!-- aqui dentro é recebido o jquery que contém um formulário de campos de input -->
	</ol>
</div>




@endsection