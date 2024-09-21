<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha_reserva" class="form-label">{{ __('Fechareserva') }}</label>
            <input type="text" name="fechaReserva" class="form-control @error('fechaReserva') is-invalid @enderror" value="{{ old('fechaReserva', $reserva?->fechaReserva) }}" id="fecha_reserva" placeholder="Fechareserva">
            {!! $errors->first('fechaReserva', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_metodo_p" class="form-label">{{ __('Id Metodop') }}</label>
            <input type="text" name="id_metodoP" class="form-control @error('id_metodoP') is-invalid @enderror" value="{{ old('id_metodoP', $reserva?->id_metodoP) }}" id="id_metodo_p" placeholder="Id Metodop">
            {!! $errors->first('id_metodoP', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_users" class="form-label">{{ __('Id Users') }}</label>
            <input type="text" name="id_users" class="form-control @error('id_users') is-invalid @enderror" value="{{ old('id_users', $reserva?->id_users) }}" id="id_users" placeholder="Id Users">
            {!! $errors->first('id_users', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>