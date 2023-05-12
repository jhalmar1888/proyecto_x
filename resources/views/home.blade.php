@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Bienvenidos al Dashboard Principal</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                              </div>
                              <form>
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                  </div>
                                </div>
                                <!-- /.card-body -->
                
                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
