<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>StockMaster</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding-top: 56px;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }

        .sidebar .nav-link:hover {
            color: #007bff;
        }

        .sidebar .nav-link.active {
            color: #007bff;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
            padding-top: 80px;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar .navbar-brand, .navbar .nav-link {
            color: #ffffff;
        }

        .navbar .navbar-brand:hover, .navbar .nav-link:hover {
            color: #b3e0ff;
        }

        .dropdown-menu {
            background-color: #f8f9fa;
        }

        .dropdown-menu .nav-link {
            color: #333;
        }

        .dropdown-menu .nav-link:hover {
            color: #007bff;
        }

        .card-header button {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            color: #007bff;
            font-size: 1rem;
            font-weight: bold;
            padding: 10px;
        }

        .card-header button:focus {
            outline: none;
        }

        .card-body {
            padding: 0 10px 10px 10px;
        }

        .nav.flex-column {
            margin: 0;
            padding: 0;
        }

        .nav-item {
            list-style: none;
        }

        .nav-item .nav-link {
            padding: 5px 10px;
        }

        .logout-button {
            margin: 10px;
        }

        /* Estilo para ampliar los marcos de proveedores */
        #collapseProveedores .card-body {
            padding: 20px;
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    StockMaster
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('shop') }}">TIENDA</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="badge badge-pill badge-dark">
                                        <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity() }}
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color:#9DA0A2">
                                    <ul class="list-group" style="margin: 20px;">
                                        @include('partials.cart-drop')
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                @auth
                    <nav id="sidebar" class="col-md-2 d-none d-md-block sidebar">
                        <div class="sidebar-sticky">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingProveedores">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseProveedores" aria-expanded="true" aria-controls="collapseProveedores">
                                            Proveedores <i class="fa fa-chevron-down float-right"></i>
                                        </button>
                                    </div>
                                    <div id="collapseProveedores" class="collapse show" aria-labelledby="headingProveedores" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('proveedors.index') }}">Ver Proveedores</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingVentas">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseVentas" aria-expanded="false" aria-controls="collapseVentas">
                                            Ventas <i class="fa fa-chevron-down float-right"></i>
                                        </button>
                                    </div>
                                    <div id="collapseVentas" class="collapse" aria-labelledby="headingVentas" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('ventas.index') }}">Ver Ventas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingClientes">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="false" aria-controls="collapseClientes">
                                            Clientes <i class="fa fa-chevron-down float-right"></i>
                                        </button>
                                    </div>
                                    <div id="collapseClientes" class="collapse" aria-labelledby="headingClientes" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('clientes.index') }}">Ver Clientes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingProductos">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="false" aria-controls="collapseProductos">
                                            Productos <i class="fa fa-chevron-down float-right"></i>
                                        </button>
                                    </div>
                                    <div id="collapseProductos" class="collapse" aria-labelledby="headingProductos" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('productos.index') }}">Ver Productos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingPedidos">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsePedidos" aria-expanded="false" aria-controls="collapsePedidos">
                                            Pedidos <i class="fa fa-chevron-down float-right"></i>
                                        </button>
                                    </div>
                                    <div id="collapsePedidos" class="collapse" aria-labelledby="headingPedidos" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('pedidos.index') }}">Ver Pedidos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logout-button">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block">Cerrar Sesión</button>
                            </form>
                        </div>
                    </nav>
                @endauth

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>
