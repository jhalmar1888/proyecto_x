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
                    <p class="mb-0">AÑADIR NUEVA PERSONA</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Persona</h3>
                              </div>
                              <form action="{{ route('Persona.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                  <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="ApellidoPaterno">Apellido Paterno</label>
                                    <input type="text" class="form-control" name="ApellidoPaterno" placeholder="ApellidoPaterno">
                                  </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label for="ApellidoMaterno">Apellido Materno</label>
                                    <input type="text" class="form-control" name="ApellidoMaterno" placeholder="ApellidoMaterno">
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label for="Nombres">Nombres</label>
                                    <input type="text" class="form-control" name="Nombres" placeholder="Nombres">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label for="Ci">Ci</label>
                                    <input type="number" class="form-control" name="Ci" placeholder="Ci">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label for="Profesion">Profesion</label>
                                    <input type="text" class="form-control" name="Profesion" placeholder="Profesion">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input type="number" class="form-control" name="Celular" placeholder="Celular">
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="form-group">
                                    <label for="Sexo">Sexo</label>
                                    <input type="text" class="form-control" name="Sexo" placeholder="Sexo">
                                  </div>
                                </div>
                                </div>
                              </div>
                                <div class="card-footer">
                                  <button class="btn btn-primary">Agregar</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div> 
            </section>
        </div>
    </div>
@stop

