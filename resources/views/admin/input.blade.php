@extends('admin.header')

@section('title')
  input
@endsection

@section('content')


  @include('flash::message')


<div class="row">
  <div class="col-sm-5">
    <p>este es un espacio reservado .....</p>
  </div>
  <div class="col-sm-6">
      <form class="form-horizontal" role="form">


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
            <input type="password" class="form-control" id="pw">
            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
          </div>
        </div>



        <div class="form-group has-success has-feedback">
          <div class="col-sm-6">
          <button type="button" class="btn btn-primary btn-lg btn-block" value="input">Acceder</button>
          </div>
          <div class="col-sm-2">

          </div>
          <div class="col-sm-6">
          <button type="button" class="btn btn-primary btn-lg btn-block" value="cancel">Cancelar</button>
          </div>
        </div>

      </form>
  </div>
</div>

<div class="row">
  <div class="col-sm-8">
    <p>Este usuario puede haces ... </p>
  </div>

</div>
</div>


@endsection
