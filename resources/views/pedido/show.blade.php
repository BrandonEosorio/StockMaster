@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? __('Show') . " " . __('Pedido') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Proveedor:</strong>
                            {{ $pedido->Nombre_Proveedor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha De Pedido:</strong>
                            {{ $pedido->Fecha_de_Pedido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Producto Pedido:</strong>
                            {{ $pedido->Producto_pedido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad Pedida:</strong>
                            {{ $pedido->Cantidad_pedida }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $pedido->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
