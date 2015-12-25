@extends('admin.header')

@section('title')
  register
@endsection


@section('content')


@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
  </div>
@endif



    <div class="row">
      <div class="col-sm-6">
        <p>este es un espacio reservado .....</p>
      </div>

      <div class="col-sm-6">
        {!!Form::open(['route'=>'admin.user.store', 'method'=>'post'])!!}
          <div class="form-group has-success has-feedback">
            <div class="col-sm-2">
              {!!Form::label('name','Nombre')!!}
            </div>
            <div class="col-sm-10">
              {!!Form::text('name', null,['class'=>'form-control'])!!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-success has-feedback">
            <div class="col-sm-2">
              {!!Form::label('email','Email')!!}
            </div>
            <div class="col-sm-10">
              {!!Form::email('email', null,['class'=>'form-control'])!!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-success has-feedback">
            <div class="col-sm-2">
              {!!Form::label('pw1','Password')!!}
            </div>
            <div class="col-sm-10">
              {!!Form::password('password',['class'=>'form-control'])!!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-success has-feedback">
            <div class="col-sm-2">
              {!!Form::label('pw2','Password')!!}
            </div>
            <div class="col-sm-10">
              {!!Form::password('password1',['class'=>'form-control'])!!}
              <span class="glyphicon glyphicon-ok form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-success has-feedback">
            <div class="col-sm-6">
              {!!Form::submit('Crear',['class'=>'btn btn-primary btn-lg btn-block'])!!}
            </div>
            <div class="col-sm-2">

            </div>
            <div class="col-sm-6">
              {!!Form::submit('Cancelar',['class'=>'btn btn-primary btn-lg btn-block'])!!}
            </div>
          </div>


        {!!Form::close()!!}
<!--

          <form class="form-horizontal" role="form">
            <div class="form-group has-success has-feedback">
              <label class="col-sm-2 control-label" for="inputSuccess">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group has-success has-feedback">
              <label class="col-sm-2 control-label" for="inputSuccess">email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group has-success has-feedback">
              <label class="col-sm-2 control-label" for="inputSuccess">password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pw1">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group has-success has-feedback">
              <label class="col-sm-2 control-label" for="inputSuccess">password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pw2">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
              </div>
            </div>

            <div class="form-group has-success has-feedback">
              <div class="col-sm-6">
              <button type="button" class="btn btn-primary btn-lg btn-block" value="created">Crear</button>
              </div>
              <div class="col-sm-2">

              </div>
              <div class="col-sm-6">
              <button type="button" class="btn btn-primary btn-lg btn-block" value="cancel">Cancelar</button>
              </div>
            </div>

          </form>

-->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
        <p>Este usuario puede haces ... </p>
      </div>

    </div>
    </div>


@endsection
