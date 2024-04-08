@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? __('Show') . " " . __('Proveedor') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('proveedors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Proveedor:</strong>
                            {{ $proveedor->Nombre_Proveedor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Empresa:</strong>
                            {{ $proveedor->Nombre_Empresa }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nit:</strong>
                            {{ $proveedor->Nit }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ciudad:</strong>
                            {{ $proveedor->Ciudad }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $proveedor->Telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $proveedor->Email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Producto:</strong>
                            {{ $proveedor->Producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
