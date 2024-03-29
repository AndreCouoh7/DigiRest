<div class="form-group {{ $errors->has('cantidadPago') ? 'has-error' : ''}}">
    <label for="cantidadPago" class="control-label">{{ 'Cantidadpago' }}</label>
    <input class="form-control" name="cantidadPago" type="number" id="cantidadPago" value="{{ isset($pago->cantidadPago) ? $pago->cantidadPago : ''}}" >
    {!! $errors->first('cantidadPago', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaPago') ? 'has-error' : ''}}">
    <label for="fechaPago" class="control-label">{{ 'Fechapago' }}</label>
    <input class="form-control" name="fechaPago" type="date" id="fechaPago" value="{{ isset($pago->fechaPago) ? $pago->fechaPago : ''}}" >
    {!! $errors->first('fechaPago', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCajero') ? 'has-error' : ''}}">
    <label for="idCajero" class="control-label">{{ 'Idcajero' }}</label>
    <input class="form-control" name="idCajero" type="number" id="idCajero" value="{{ isset($pago->idCajero) ? $pago->idCajero : ''}}" >
    {!! $errors->first('idCajero', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
