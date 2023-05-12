@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">TIPO LICENCIA</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">TIPO LICENCIA</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Tipo Licencia</h3>
                                <h2>
                                    Editar Tipo Licencia
                                    <a href="{{ route('TipoLicencia.index') }}" class="btn btn-primary pull-right">Listado</a>
                            
                              </div>
                             
                                {{-- {!! Form::model($producto, ['route' => ['producto.update', $producto->id], 'method' => 'PUT']) !!}
                                    @include('producto.partials.form')
                                {!! Form::close() !!} --}}
                            </div>
                        </div>
                    </div> 
            </section>
        </div>
    </div>
@stop
