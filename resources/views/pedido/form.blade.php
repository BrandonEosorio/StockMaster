<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre__proveedor" class="form-label">{{ __('Nombre Proveedor') }}</label>
            <input type="text" name="Nombre_Proveedor" class="form-control @error('Nombre_Proveedor') is-invalid @enderror" value="{{ old('Nombre_Proveedor', $pedido?->Nombre_Proveedor) }}" id="nombre__proveedor" placeholder="Nombre Proveedor">
            {!! $errors->first('Nombre_Proveedor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_de__pedido" class="form-label">{{ __('Fecha De Pedido') }}</label>
            <input type="text" name="Fecha_de_Pedido" class="form-control @error('Fecha_de_Pedido') is-invalid @enderror" value="{{ old('Fecha_de_Pedido', $pedido?->Fecha_de_Pedido) }}" id="fecha_de__pedido" placeholder="Fecha De Pedido">
            {!! $errors->first('Fecha_de_Pedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="producto_pedido" class="form-label">{{ __('Producto Pedido') }}</label>
            <input type="text" name="Producto_pedido" class="form-control @error('Producto_pedido') is-invalid @enderror" value="{{ old('Producto_pedido', $pedido?->Producto_pedido) }}" id="producto_pedido" placeholder="Producto Pedido">
            {!! $errors->first('Producto_pedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad_pedida" class="form-label">{{ __('Cantidad Pedida') }}</label>
            <input type="text" name="Cantidad_pedida" class="form-control @error('Cantidad_pedida') is-invalid @enderror" value="{{ old('Cantidad_pedida', $pedido?->Cantidad_pedida) }}" id="cantidad_pedida" placeholder="Cantidad Pedida">
            {!! $errors->first('Cantidad_pedida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $pedido?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>