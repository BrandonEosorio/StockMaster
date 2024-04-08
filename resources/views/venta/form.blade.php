<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="i_d__cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="text" name="ID_Cliente" class="form-control @error('ID_Cliente') is-invalid @enderror" value="{{ old('ID_Cliente', $venta?->ID_Cliente) }}" id="i_d__cliente" placeholder="Id Cliente">
            {!! $errors->first('ID_Cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre__cliente" class="form-label">{{ __('Nombre Cliente') }}</label>
            <input type="text" name="Nombre_Cliente" class="form-control @error('Nombre_Cliente') is-invalid @enderror" value="{{ old('Nombre_Cliente', $venta?->Nombre_Cliente) }}" id="nombre__cliente" placeholder="Nombre Cliente">
            {!! $errors->first('Nombre_Cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_de__venta" class="form-label">{{ __('Fecha De Venta') }}</label>
            <input type="text" name="Fecha_de_Venta" class="form-control @error('Fecha_de_Venta') is-invalid @enderror" value="{{ old('Fecha_de_Venta', $venta?->Fecha_de_Venta) }}" id="fecha_de__venta" placeholder="Fecha De Venta">
            {!! $errors->first('Fecha_de_Venta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="Cantidad" class="form-control @error('Cantidad') is-invalid @enderror" value="{{ old('Cantidad', $venta?->Cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('Cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="Precio" class="form-control @error('Precio') is-invalid @enderror" value="{{ old('Precio', $venta?->Precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('Precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total" class="form-label">{{ __('Total') }}</label>
            <input type="text" name="Total" class="form-control @error('Total') is-invalid @enderror" value="{{ old('Total', $venta?->Total) }}" id="total" placeholder="Total">
            {!! $errors->first('Total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>