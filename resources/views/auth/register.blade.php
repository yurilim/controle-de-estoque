@extends('layouts.app') @section('content')

<div class="bgRegistro">
    <img src="{{ asset('imgs/logo_horizon2.png')}}" class="centerlogo">

    <div class="bgRegistro2">

        
            <div class="titulo-registro">Novo Registro</div>

            <form class="registro" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="{{ $errors->has('name') ? ' has-error' : '' }} input-field col s10">
                        <label for="name">Nome</label>
                        <input id="name" class="inputeste" type="text" name="name" value="{{ old('name') }}" required>
                         @if ($errors->has('name'))
                            <span>
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }} input-field col s10">
                        <label for="email">E-Mail</label>
                        <input id="email" class="inputeste" type="email" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }} input-field col s10 ">
                        <label for="password">Senha</label>
                        <input id="password" class="inputeste" type="password" name="password" required> @if ($errors->has('password'))
                        <span>
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s10">
                        <label for="password-confirm">Confirmar Senha</label>
                        <input id="password-confirm" class="inputeste" type="password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn btn-primary btnregistrar">
                            Registrar
                        </button>
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



@endsection