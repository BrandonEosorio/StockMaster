<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_cliente" class="form-label">{{ __('Nombre Cliente') }}</label>
            <input type="text" name="Nombre_cliente" class="form-control @error('Nombre_cliente') is-invalid @enderror" value="{{ old('Nombre_cliente', $cliente?->Nombre_cliente) }}" id="nombre_cliente" placeholder="Nombre Cliente">
            {!! $errors->first('Nombre_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', $cliente?->Email) }}" id="email" placeholder="Email">
            {!! $errors->first('Email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>