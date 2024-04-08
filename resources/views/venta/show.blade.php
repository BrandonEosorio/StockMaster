@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? __('Show') . " " . __('Venta') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ventas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $venta->ID_Cliente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Cliente:</strong>
                            {{ $venta->Nombre_Cliente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha De Venta:</strong>
                            {{ $venta->Fecha_de_Venta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cantidad:</strong>
                            {{ $venta->Cantidad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $venta->Precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Total:</strong>
                            {{ $venta->Total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
