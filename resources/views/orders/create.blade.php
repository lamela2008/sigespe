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

            <h2>Registro de Nuevo Chofer</h2>

            <div class="form-group label-floating">
                <label for="name" class="control-label">Nombre</label>
                <input class="form-control" placeholder="Nombre" name="name" type="text"  value="{{ Request::old('name') }}">
            </div>

            <div class="form-group label-floating">
                <label for="lastname" class="control-label">Apellidos</label>
                <input class="form-control" placeholder="Apellidos" name="lastname" type="text"  value="{{ Request::old('lastname') }}">
            </div>

            <div class="form-group label-floating">
                <label for="dni" class="control-label">DNI</label>
                <input class="form-control" placeholder="DNI" name="dni" value="" type="text">
            </div>

            <div class="form-group label-floating">
                <label for="bithdate" class="control-label">Fecha de Nacimiento</label>
                <input class="form-control" placeholder="Fecha de Nacimiento" name="bithdate" value="" type="bithdate">
            </div>

            <div class="form-group label-floating">
                <label for="phone" class="control-label">Teléfono</label>
                <input class="form-control" placeholder="Teléfono" name="phone" value="" type="text">
            </div>

            <div class="form-group label-floating">
                <label for="mobile" class="control-label">mobile</label>
                <input class="form-control" placeholder="mobile" name="mobile" value="" type="text">
            </div>

            <div class="form-group label-floating">
                <label for="address" class="control-label">Dirección</label>
                <input class="form-control" placeholder="Dirección" name="address" value="" type="text">
            </div>

            <div class="form-group label-floating">
                <label for="license" class="control-label">Licencia</label>
                <input class="form-control" placeholder="Licencia" name="license" value="" type="text">
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