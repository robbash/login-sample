@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <p class="lead">{{trans( 'dashboard.welcome', array( 'name' => $user->name ) )}}</p>
      <p class="lead well">{{trans( 'dashboard.intro' )}}</p>
      {{link_to_route( 'logout', trans( 'dashboard.logout' ), [], [ 'class' => 'btn btn-default' ] )}}
    </div>
  </div>
@stop