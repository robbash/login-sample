<?php

class UserController extends BaseController {

  public function showLoginForm() {
    return View::make( 'loginform' );
  }

  public function checkUserLogin() {
    $validator = Validator::make(
      Input::all(),
      array(
        'email' => 'required|email',
        'password' => 'required|min:6'
      ) );

    // Invalid data
    if ( $validator->fails() ) {
      return Redirect::route( 'login' )->withErrors( $validator->messages() );

    // Login successful?
    } else if ( Auth::attempt( Input::only( 'email', 'password' ) ) ) {
      return Redirect::route( 'dashboard' );

    // Login failed
    } else {
      return Redirect::route( 'login' )->withErrors( array( trans( 'login.failed' ) ) );
    }
  }

  public function logout() {
    Auth::logout();

    // Actually then redirects to login, but in case there 
    // will be a public dashboard one day...
    return Redirect::route( 'dashboard' );
  }

}
