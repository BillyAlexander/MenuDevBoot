<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$user=array(
		        'email'=>Input::get('email'),
		        'password'=>(Input::get('password')),
		        'StatusId' => 1
			);

		    $remember=Input::get('remember');
		    $remember=='On' ? $remember = true : $remember=false;
	    
		    if( Auth::user()->attempt($user,$remember ))
		    {
		        // return View::make('welcome');
		        // return URL::to("/bienvenido");
		        // return route('/bienvenido');
		        return Redirect::to('/bienvenido');
		    }
		    else
		    {
		    	return Redirect::route("index");
		    }
	}

	public function doLogout()
	{
		 Auth::user()->logout();
            return Redirect::to('login');
	}


	 // public function admin()
  //   {
  //       return View::make('welcome');
  //   }

	

}
