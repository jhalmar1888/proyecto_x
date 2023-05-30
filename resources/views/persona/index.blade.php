@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
    <h1 class="m-0 text-dark">PERSONA</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">PERSONA</p>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('Persona.create') }}"> Crear Nuevo</a>
                        </div>
                    </div>
                </div>  
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('danger'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($message = Session::get('info'))
                    <div class="alert alert-info">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Gerencia</th>
                        <th>Rol</th>
                        <th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Nombres</th>
						<th>Ci</th>
						<th>DepDocId</th>
						<th>Arma</th>
						<th>Especialidad</th>
						<th>Cargo</th>
						<th>TipoLicencia</th>
						<th>Profesion</th>
						<th>Celular</th>
						<th>Sexo</th>
						<th>Archivo</th>
						<th>Reparticion</th>

                        <th width="280px">Acción</th>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->Gerencia }}</td>
                        <td>{{ $item->Rol }}</td>
                        <td>{{ $item->ApellidoPaterno }}</td>
						<td>{{ $item->ApellidoMaterno }}</td>
						<td>{{ $item->Nombres }}</td>
						<td>{{ $item->Ci }}</td>
						<td>{{ $item->DepDocId }}</td>
						<td>{{ $item->Arma }}</td>
						<td>{{ $item->Especialidad }}</td>
						<td>{{ $item->Cargo }}</td>
						<td>{{ $item->TipoLicencia }}</td>
						<td>{{ $item->Profesion }}</td>
						<td>{{ $item->Celular }}</td>
						<td>{{ $item->Sexo }}</td>
						<td>{{ $item->Archivo }}</td>
						<td>{{ $item->Reparticion }}</td>
                        <td>
                            <form action="{{ route('Persona.destroy',$item->id) }}" method="POST">
               
                                <a class="btn btn-info" href="{{ route('Persona.show',$item->id) }}">Ver</a>
                
                                <a class="btn btn-primary" href="{{ route('Persona.edit',$item->id) }}">Editar</a>
               
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" href="{{ route('Persona.destroy',$item->id) }}" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
              
                {!! $items->links() !!}
                  
                </div>
            </section>
        </div>
    </div>
@stop