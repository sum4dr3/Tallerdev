@extends('layout.plantilla')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Persona</h3>@if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
{{Form::open(array('action'=>array('App\http\Controllers\PersonaController@update', $persona->id),'method'=>'patch'))}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="documento">Numero Documento</label>
            <input type="number" name="documento_identidad" id="documento_identidad" class="form-control"
                placeholder="Digite el número Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre_est" id="nombre_est" class="formcontrol" placeholder="Nombre Completo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido_est" id="apellido_est" class="formcontrol"
                placeholder="Apellidos Completos">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email_est" id="email_est" class="form-control" placeholder="Correo Electrónico">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono_est" id="telefono_est" class="formcontrol" placeholder="Telefono">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombres de Acudientes</label>
            <input type="text" name="nombre_acu" id="nombre_acu" class="formcontrol" placeholder="Nombre Completo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="telefono">Telefono de Acudiente</label>
            <input type="number" name="telefono_acu" id="telefono_acu" class="formcontrol" placeholder="Telefono">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh">
                </span>Actualizar
            </button>
            <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span
                    class="glyphicon glyphicon-home"></span>Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection