

<form class="col s12" id='form3' name="form3" method="post" action="{{ url('/tEqp_delete', $tie->tie_id) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">

    <a href = "{{ url('/tEqp_edit', $tie->tie_id) }}" class="btn waves-effect"> <i class="material-icons">edit</i> </a>

    <button type="submit" value="deletar" class="btn red lighten-1">
        <i class="material-icons">delete</i>
    </button>

</form>