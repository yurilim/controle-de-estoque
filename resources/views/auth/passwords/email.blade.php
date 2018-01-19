@extends('layouts.app') @section('content')

<div class="bgRegistro">
    <img src="{{ asset('imgs/logo_horizon.png')}}" class="centerlogo">

    <div class="bgsenha">
            <div class="titulo-senha">Cadastrar nova senha</div>
            <div class="row">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="registro" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }} input-field col s10">
                            <label for="email">E-Mail</label>                            
                            <input id="email" type="email" class="inputeste" name="email" value="{{ old('email') }}" required>
                             @if ($errors->has('email'))
                                <span>
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            
                        </div>

                        <div class="row">
                            <div class="col s10 center ">
                                <button type="submit" class="btn btn-primary btnresetar">
                                    Link para resetar
                                </button>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col s10 center ">
                                <span>
                                    <em> Atenção: </em>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s10 center ">
                                <span>
                                    <strong> Você receberá informações de como proceder para alterar a senha no e-mail acima fornecido. </strong>
                                </span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s10 center ">
                                <a class="linkvoltar" href="{{ route('login') }}">Voltar</a>
                            </div>
                        </div>

                    </form>

                </div>
            
        </div>
</div>

@endsection