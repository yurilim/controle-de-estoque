<table class="centered striped teste">
    <thead>
        <tr>
            {{--
            <th>Id</th> --}}
            <th>Nome do fornecedor</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @if(isset($fornecedor)) @foreach($fornecedor as $for)

        <tr>
            {{--
            <td>{{$for->for_id}}</td> --}}
            <td>{{$for->for_nome}}</td>
            <td>{{$for->for_cnpj}}</td>
            <td>{{$for->for_endereco}}</td>
            <td>{{$for->for_telefone}}</td>
            <td>{{$for->for_email}}</td>
            <td>
                @include('forms.fornecedor.delete_for')
            </td>
        </tr>

        @endforeach @endif

    </tbody>

</table>