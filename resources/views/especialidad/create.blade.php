@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Especialidad</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">ESPECIALIDAD</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">ESPECIALIDAD</h3>
                              </div>
                              <form action="{{ route('Especialidad.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="Num">Num</label>
                                    <input type="text" class="form-control" name="Num" placeholder="Numero">
                                  </div>
                                  <div class="form-group">
                                    <label for="Especialidad">Especialidad</label>
                                    <input type="text" class="form-control" name="Especialidad" placeholder="Especialidad">
                                  </div>
                                </div>
                
                                <div class="card-footer">
                                  <button class="btn btn-primary">Agregar</button>
                                  {{-- <button type="submit" class="btn btn-warning">Editar</button>
                                  <button type="submit" class="btn btn-danger">Eliminar</button> --}}
                                </div>
                              </form>
                            </div>
                        </div>
                    </div> 
            </section>
        </div>
    </div>
@stop
