@extends ('home')

@section('links')

<div class="paleta-titulo">
    <p class="titulo-interno"> Manutenção de dispositivos</h6>
</div>
    <form action="" class="center">

        <div class="row">
            <div class="col s3 push-s2 ">
                <select name="selecao" class="validate">
                    <option value="" disabled selected>Municipio vindo do banco</option>
                    <option value="" >Nárnia</option>
                    <option value="" >Vai vai</option>
                </select>
                <label>Município Solicitante</label>
            </div>
            
            <div class="input-field col s3 push-s3 ">
                <input id="resp" type="text" class="validate">
                <label for="resp">Responsável pela solicitação</label>
            </div>

        </div>

        <div class="row">
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
            <div class="input-field col s3 push-s2">
                <input id="observacao" type="text" class="validate" data-length="120">
                <label for="observacao">Observação</label>
            </div>

            <div class="input-field col s3 push-s3 ">
				<select name="selecao2">
                    <option value="" disabled selected>Selecione um opção</option>                    
                    <option value="">Carregador com defeito</option>
                    <option value="">Outro</option>
                    <option value="">Precisa de peça para reparo</option>
                    <option value="">Touchscreen com defeito</option>
                    
				</select>
				<label>Observação 2:</label>
			</div>
        </div>

        <div class="btn-confirmar">
            <button id="confirmar" class="btn waves-effect waves-light light-green" type="buttom">
                Confirmar
            </button>
        </div>



    </form>






@endsection