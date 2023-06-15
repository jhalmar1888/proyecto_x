@extends('adminlte::page')


@section('title','Archivo')


@section('content_header')
    <h1 class="m-0 text-dark">Archivo</h1>
@stop


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Archivos</p>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                        <a href="{{url('archivo/create')}}" class="btn btn-primary btn-sm" >Nuevo Archivo</a>
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
                        <th>Nro</th>
                        <th>ARCHIVO</th>
                        <th>TIPO ARCHIVO</th>
                        <th>URL</th>
                        <th width="280px">ACCIONES</th>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->Archivo }}</td>
                        <td>{{ $item->TipoArchivo }}</td>
                        <td>{{ $item->URL}}</td>
                        <td>
                            <form action="{{ route('archivo.destroy',$item->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('archivo.show',$item->id) }}">Ver</a>

                                <a class="btn btn-primary" href="{{ route('archivo.edit',$item->id) }}">Editar</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" href="{{ route('archivo.destroy',$item->id) }}" class="btn btn-danger">Eliminar</button>
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

