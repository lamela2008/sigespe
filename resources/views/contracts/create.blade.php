@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Conductor
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form  method="POST" action="/saveDriver" accept-charset="UTF-8">

            <h2>Registro de Nuevo Contrato</h2>

            <div class="form-group label-floating">
                <label for="start-date" class="control-label">Fecha de Inicio</label>
                <input class="form-control" placeholder="Fecha de Inicio" name="start-date" type="text"  value="{{ Request::old('start-date') }}">
            </div>

            <div class="form-group label-floating">
                <label for="end-date" class="control-label">Fecha de Fin</label>
                <input class="form-control" placeholder="Fecha de Fin" name="end-date" type="text"  value="{{ Request::old('end-date') }}">
            </div>

            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Por tiempo Indefinido
                </label>
              </div>
            </div>

            <div class="form-group label-floating">
                <label for="status" class="control-label">Tipo de Frecuencia de Entrega</label>
                <select class="form-control" placeholder="Estatus" name="status">
                    <option></option>
                    <option value="1">Dias Fijos</option>
                    <option value="2">Periódicamente</option>
                </select>
            </div>

            <div class="form-group label-floating">
                <label for="quantity" class="control-label">Cantidad Máxima de Reposición</label>
                <input class="form-control" placeholder="Cantidad Máxima de Reposición" name="quantity" value="" type="quantity">
            </div>

            <div class="form-group label-floating">
                <label for="address_id" class="control-label">Dirección de Entrega</label>
                <select class="form-control" placeholder="Dirección de Entrega" name="address_id">
                    <option></option>
                </select>
            </div>

            <div class="form-group label-floating">
                <label for="status" class="control-label">Estatus</label>
                <select class="form-control" placeholder="Estatus" name="status">
                    <option></option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <input name="_token" value="{{ csrf_token() }}" type="hidden">
            <input class="btn btn-primary" value="Guardar" type="submit">
            <input class="btn btn-primary" value="Cancelar" type="button">

        </form>
    </div>
</div>


@stop