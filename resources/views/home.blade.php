@extends('layouts.app') 

@section('content')

<nav>
    <div class="nav-wrapper grey darken-4 paleta_horizontal">
        <a href="#" class="brand-logo">
            <img src="{{ asset('imgs/umaImg')}}" class="logo">
        </a>

        <div class="right sair">
            <ul id="dropdown2" class=" dropdown-content sair-suspensao">
                <li>
                    <a class="sair sair-span" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <a href="#" class="dropdown-button" data-activates="dropdown2">
                {{ Auth::user()->name }}
                <i class="material-icons right">arrow_drop_down</i>
            </a>
        </div>

        <div class="titulo-sistema center">
            <p> SISTEMA DE CONTROLE DE ESTOQUE - SC</p>
        </div>

    </div>
</nav>

<header>
    <div class="fixed-announcement">
        <ul id="slide-out" class="side-nav fixed grey darken-4 paleta_vertical menu-custom">
            <div class="divider"></div>
            <li>
                <a href="/painel">
                    <span>Painel</span>
                </a>
            </li>
            <div class="divider"></div>
            <li>
                <a href="/entrada">
                    <span>Entrada</span>
                </a>
            </li>
            <div class="divider"></div>
            <li>
                <a href="/movimentacao">
                    <span>Movimentos</span>
                </a>
            </li>
            <div class="divider"></div>
            <li>
                <a href="/manutencao">
                    <span>Manutenção</span>
                </a>
            </li>
            <div class="divider"></div>
            <li>
                <a href="#">
                    <span>Relatórios</span>
                </a>
            </li>
            <div class="divider"></div>
            <li>
                <a href="/configuracoes">
                    <span>Configurações</span>
                </a>
            </li>
            <div class="divider"></div>
        </ul>
    </div>
</header>
    
<main>
    <div class="container">
        @yield('links')
    </div>
</main>

@endsection