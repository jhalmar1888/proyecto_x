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
                    <p class="mb-0">EDITAR PERSONA</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Persona</h3>
                              </div>
                              <form action="{{ route('Persona.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ApellidoPaterno">Apellido Paterno</label>
                                        <input type="text" class="form-control" value="{{ $item->ApellidoPaterno }}"  name="ApellidoPaterno" placeholder="ApellidoPaterno">
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label for="ApellidoMaterno">Apellido Materno</label>
                                        <input type="text" class="form-control" value="{{ $item->ApellidoMaterno }}"  name="ApellidoMaterno" placeholder="ApellidoMaterno">
                                      </div>
                                    </div>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" value="{{ $item->Nombres }}"  name="Nombres" placeholder="Gerencia">
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="Ci">Ci</label>
                                        <input type="text" class="form-control" value="{{ $item->Ci }}"  name="Ci" placeholder="Ci">
                                      </div>
                                    </div>
                                      <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="Profesion">Profesion</label>
                                        <input type="text" class="form-control" value="{{ $item->Profesion }}"  name="Profesion" placeholder="Profesion">
                                      </div>
                                    </div>
                                      <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="text" class="form-control" value="{{ $item->Celular }}"  name="Celular" placeholder="Celular">
                                      </div>
                                    </div>
                                      <div class="col-sm-3">
                                      <div class="form-group">
                                        <label for="Sexo">Sexo</label>
                                        <input type="text" class="form-control" value="{{ $item->Sexo }}"  name="Sexo" placeholder="Sexo">
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                  <button class="btn btn-warning">Editar</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div> 
            </section>
        </div>
    </div>
@stop


