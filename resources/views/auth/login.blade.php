@extends('layouts.app') 

@section('content')

<div class="bgLogin1">
    <img src="{{ asset('imgs/outraImg')}}" class="logo" >

      <div class="bgLoginContainer">
        {{--  <div class="alinharLogin">   --}}
            
            <form class="" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="row">
                    <div class="{{ $errors->has('email') ? ' has-error' : '' }} input-field col s10 push-s1">
                        <label for="email">E-Mail</label>
                        <input class="inputs" id="email" type="email" name="email" value="{{ old('email') }}" required> 
                        @if ($errors->has('email'))
                            <span>
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="{{ $errors->has('password') ? ' has-error' : '' }} input-field col s10 push-s1">
                        <label for="password">Senha</label>
                        <input class="inputs" id="password" type="password" class="form-control" name="password" required> 
                        @if ($errors->has('password'))
                            <span>
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 push-s1">
                        <input type="checkbox" id="test5" name="remember" {{ old( 'remember') ? 'checked' : '' }}/>
                        <label for="test5">Me lembre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 center">
                        <button type="submit" class="btn btn-primary btnlogin">
                            Acessar
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4 push-s3">
                        <a class="linkurl" href="{{ route('password.request') }}">Esqueci a senha</a>
                    </div>
                    <div class="col s8 push-s2 ">
                        <a class="linkurl" href="{{ route('register') }}">Novo Registro</a>
                    </div>
                </div>

            </form>
        {{--  </div>  --}}
    </div>  

</div>

@endsection