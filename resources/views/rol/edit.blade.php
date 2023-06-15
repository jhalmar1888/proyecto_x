@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">ROL</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">ROL</p>
                </div>
            </div>
            <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Rol</h3>
                              </div>
                              <form action="{{ route('Rol.update',$item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="Num">Num</label>
                                    <input type="text" class="form-control" value="{{ $item->Num }}"  name="Num" placeholder="Numero">
                                  </div>
                                  <div class="form-group">
                                    <label for="Rol">Rol</label>
                                    <input type="text" class="form-control" value="{{ $item->Rol }}" name="Rol" placeholder="Rol">
                                  </div>
                                </div>
                
                                <div class="card-footer">
                                  <button class="btn btn-warning">Editar</button>
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
