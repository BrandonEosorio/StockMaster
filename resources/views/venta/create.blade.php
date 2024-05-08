@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Venta
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar Nueva Venta</h4>

        <div class="alert alert-danger mt-3 d-none" id="mensaje-error" role="alert"></div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>

<div class="row">
    <!-- ID_Cliente field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="ID_Cliente">Cliente_ID</label>
            <select name="ID_Cliente" id="ID_Cliente" class="form-control selectpicker" data-live-search="true" required>
                <option value="" disabled selected>Selecciona un cliente</option>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->Nombre_Cliente }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Nombre_Cliente field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_Cliente">Nombre Cliente</label>
            <input type="text" id="Nombre_Cliente" name="Nombre_Cliente" class="form-control" required>
        </div>
    </div>
    <!-- Cantidad field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cantidad">Cantidad</label>
            <input type="number" id="Cantidad" name="Cantidad" class="form-control" required>
        </div>
    </div>
</div>
<div class="row">
    <!-- Precio field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Precio">Precio</label>
            <input type="number" id="Precio" name="Precio" class="form-control" step="0.01" required>
        </div>
    </div>
    <!-- Total field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Total">Total</label>
            <input type="number" id="Total" name="Total" class="form-control" step="0.01" required>
        </div>
    </div>
    <!-- Fecha_de_Venta field -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Fecha_de_Venta">Fecha de Venta</label>
            <input type="date" id="Fecha_de_Venta" name="Fecha_de_Venta" class="form-control" required>
        </div>
    </div>
</div>



    <div class="row">
        <!-- Add other form fields -->
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
            <div class="form-group">
                <br>
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
                <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
                <a class="btn btn-info" href="{{ url('ventas') }}"><span class="glyphicon glyphicon-home"></span> Regresar</a>
            </div>
        </div>
    </div>
</form>

<script src="{{ asset('js/buscar.js') }}"></script>
@endsection