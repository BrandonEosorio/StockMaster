
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar asignación de Grupos</h4>
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

{!! Form::open(array('url'=>'asignacion','method'=>'POST','autocomplete'=>'off')) !!}
{{ Form::token() }}

<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="periodo">Periodo</label>
            <input type="text" name="periodo" id="periodo" class="form-control" placeholder="Periodo Académico">
        </div>
    </div>

    <!-- Aquí comienza el nuevo código agregado -->
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="producto_id">Producto</label>
            <select name="producto_id" id="producto_id" class="form-control selectpicker" data-livesearch="true" required>
                <option value="" disabled selected>Producto:</option>
                @foreach($productos as $prod)
                    <option value="{{ $prod->id }}">{{ $prod->Nombre_Producto }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="proveedor_id">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control selectpicker" data-livesearch="true" required>
                <option value="" disabled selected>Proveedor:</option>
                @foreach($proveedores as $prov)
                    <option value="{{ $prov->id }}">{{ $prov->Nombre_Proveedor }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="venta_id">Venta</label>
            <select name="venta_id" id="venta_id" class="form-control selectpicker" data-livesearch="true" required>
                <option value="" disabled selected>Venta:</option>
                @foreach($ventas as $vent)
                    <option value="{{ $vent->id }}">{{ $vent->Fecha_de_Venta }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="pedido_id">Pedido</label>
            <select name="pedido_id" id="pedido_id" class="form-control selectpicker" data-livesearch="true" required>
                <option value="" disabled selected>Pedido:</option>
                @foreach($pedidos as $ped)
                    <option value="{{ $ped->id }}">{{ $ped->Fecha_de_Pedido }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- Aquí termina el nuevo código agregado -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="reset" class="btn btn-danger">Vaciar Campos</button>
            <a href="{{ url('asignacion') }}" class="btn btn-info">Regresar</a>
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection
