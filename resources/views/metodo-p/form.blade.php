<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="metodo_p" class="form-label">{{ __('Metodop') }}</label>
            <input type="text" name="metodoP" class="form-control @error('metodoP') is-invalid @enderror" value="{{ old('metodoP', $metodoP?->metodoP) }}" id="metodo_p" placeholder="Metodop">
            {!! $errors->first('metodoP', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>