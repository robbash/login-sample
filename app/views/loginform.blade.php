@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open( array('route' => 'login') ) }}

      @if ( $errors->all() )
        <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          <div>{{$error}}</div>
        @endforeach
        </div>
      @endif

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-at fa-fw"></i></div>
              <label class="sr-only" for="email">{{ trans( 'login.email' ) }}</label>
              {{ Form::email( 'email', null, [ 'class' => 'form-control', 'placeholder' => trans( 'login.email' ) ] ) }}
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock fa-fw"></i></div>
              <label class="sr-only" for="password">{{ trans( 'login.password' ) }}</label>
              {{ Form::password( 'password', [ 'class' => 'form-control', 'placeholder' => trans( 'login.password' ) ] ) }}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          {{ Form::submit( trans( 'login.submit' ), [ 'class' => 'btn btn-large btn-primary btn-block' ] ) }}
        </div>
      </div>
      {{ Form::close() }}
    </div>
  </div>
@stop
