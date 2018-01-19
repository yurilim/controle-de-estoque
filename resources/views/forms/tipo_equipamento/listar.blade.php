
<div>
      <table class="centered striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo de Equipamento</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
           @if(isset($tipo_equipamento))
                @foreach($tipo_equipamento as $tie)
                    <tr>                        
                        <td>{{$tie->tie_id}}</td>
                        <td>{{$tie->tie_nome}}</td>
                        <td> 
                            @include('forms.tipo_equipamento.deletar')                            
                        </td>
                    </tr>
                @endforeach
           @endif
        </tbody>   
    </table>    
</div>
