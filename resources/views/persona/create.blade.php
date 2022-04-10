@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h2><span class="badge badge-success">Ingresar Persona</span></h2></br>
        @if (count($errors)>0)
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
{!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off'))!!}{{Form::token()}}
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
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar
                Campos</button>
            <a class="btn btn-info" type="reset" href="{{url('estudiante')}}"><span
                    class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>{!!Form::close()!!}
@endsection
