<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Projeto TCC</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <!--===============================USUARIOS=================================-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuario</a>
                    <div class="dropdown-menu">
                        <!--Grupos de Usuario
                        =====================
                        1 - Administrador
                        2 - Colaborador
                        3 - Usuario-->
                        @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                      <a class="dropdown-item" href="{{ route('users.create') }}">Criar</a>
                        @endif

                      <a class="dropdown-item" href="{{ route('users.index') }}">Ver Mais</a>
                        @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('users.list_user') }}">Ver Tudo</a>
                    </div>
                        @endif
                </li>
                <!--===========================ORDENS DE SERVIÇOS=============================-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ordem de Serviço</a>
                    <div class="dropdown-menu">               
                      <a class="dropdown-item" href="{{ route('orderservices.create') }}">Criar</a>
                      <a class="dropdown-item" href="{{ route('orderservices.index') }}">Ver Mais</a>
                      @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('orderservices.list_orderservice') }}">Ver Tudo</a>
                    </div>
                    @endif
                </li>
                <!--=================================ORÇAMENTOS================================-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Orçamento</a>
                    <div class="dropdown-menu">
                    <!--Grupos de Usuario
                    =====================
                    1 - Administrador
                    2 - Colaborador
                    3 - Usuario-->
                    @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                      <a class="dropdown-item" href="{{ route('orcamentos.create') }}">Criar</a>
                      @endif
                      <a class="dropdown-item" href="{{ route('orcamentos.index') }}">Ver Mais</a>
                      @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('orcamentos.list_orcamento') }}">Ver Tudo</a>
                    </div>
                    @endif
                </li>
                <!--============================================================================-->
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>-->

            <!--===================================================================================-->
            <li class="nav-item">
                <!--a class="nav-link" href="{{ route('logout')}}">Logout</a-->
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <font color= #FF6347> Logout </font></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active navbar-right">
                <a class="nav-link" href="#">{{ Auth()->user()->name }}<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">


            <ul class="nav nav-pills flex-column">
                @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.create') }}">Criar Usuarios</a>
                </li>
                @endif
                <!--<li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orderservices.create') }}">Criar Ordem de Serviço</a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="{{ route('orderservices.index') }}">Ordens de Serviços</a>
                </li>-->

                <!--Grupos de Usuario
                =====================
                1 - Administrador
                2 - Colaborador
                3 - Usuario-->
                
                @if(Auth::user()->grupo == 1 OR Auth::user()->grupo == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orcamentos.create') }}">Criar Orçamento</a>
                </li>
                @endif
                <!--@if(Auth::user()->orcamento['status'] == 2)
                     <li class="nav-item">
                    <a class="nav-link" href="{{ route('orcamentos.create') }}">Criar Orçamento</a>
                </li>
                @endif-->
                <!--<li class="nav-item">
                    <a class="nav-link" href="{{ route('orcamentos.index') }}">Orçamentos</a>
                </li>-->
            </ul>

        </nav>-->

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

            @yield('content')

        </main>
    </div>
</div>

        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
            <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
        </body>
        </html>
