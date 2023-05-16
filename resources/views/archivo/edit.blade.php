@extends('adminlte::page')

@section('title','Agregar Archivo')

@section('content_header')
    <h1 class="m-0 text-dark">ARCHIVO</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">ARCHIVO</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-success">
                              <div class="card-header">
                                <h3 class="card-title">Actualizar Archivo</h3>
                              </div>
                              <form action="{{ route('archivo.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="Archivo">Archivo</label>
                                    <input type="text" class="form-control" value="{{ $item->Archivo }}"name="Archivo" placeholder="Archivo">
                                  </div>
                                  <div class="form-group">
                                    <label for="TipoArchivo">Tipo Archivo</label>
                                    <input type="text" class="form-control" value="{{ $item->TipoArchivo }}" name="TipoArchivo" placeholder="Tipo de Archivo">
                                  </div>
                                  <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control" value="{{ $item->URL }}"name="url" placeholder="url">
                                  </div>
                                </div>

                                <div class="card-footer">
                                  <button class="btn btn-primary">ACTUALIZAR</button>
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




