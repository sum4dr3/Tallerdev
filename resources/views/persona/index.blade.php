@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('persona/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Persona</button> </a>
    </div>
</div>
<div class="row">
    <div class="col-md-9 col-xs-9">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Documento Identidad</th>
                    <th>Nombres del Estudiante</th>
                    <th>Apellidos del Estudiante</th>
                    <th>Correo Electrónico del Estudiante</th>
                    <th>Telefono del Estudiante</th>
                    <th>Nombres del Acudiente</th>
                    <th>Telefono del Acudiente</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($persona as $per)
                    <tr>
                        <td>{{ $per->id }}</td>
                        <td>{{ $per->documento_identidad }}</td>
                        <td>{{ $per->nombre_est }}</td>
                        <td>{{ $per->apellido_est }}</td>
                        <td>{{ $per->email_est }}</td>
                        <td>{{ $per->telefono_est }}</td>
                        <td>{{ $per->nombre_acu }}</td>
                        <td>{{ $per->telefono_acu }}</td>
                        <td>
                            <a href="{{URL::action('App\http\Controllers\PersonaController@edit',$per->id)}}">
                                <buttonclass="btn btn-primary">Actualizar</button>
                            </a>
                            <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"> <button
                                    class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('persona.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection