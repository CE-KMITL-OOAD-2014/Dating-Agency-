<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('/login', function(){
  $credentials = Input::only('username', 'password');
  if(Auth::attempt($credentials)){
    return Redirect::to('showprofile');
  }
  return Redirect::to('register');
});

Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('register');
});

Route::post('/login', function(){
  $credentials = Input::only('username', 'password');
  if(Auth::attempt($credentials)){
    return Redirect::to('showprofile');
  }
  return Redirect::to('register');
});

Route::get('register',function(){
	return View::make('register');
});

Route::post('register','AuthController@register');

Route::get('buildprofile',function(){
	return View::make('buildprofile');
});

Route::post('buildprofile','AuthController@register');

Route::get('showprofile', function(){
	$username = "";
	if(isset(Auth::user()->username)){
		$username = Auth::user()->username;
}
	return View::make('showprofile', array('user' => Auth::user()));

});


Route::post('showprofile','AuthController@profile');
/*
Route::get('profile',function(){

//  return View::make('profile',array('user' =>Auth::user()));

});*/
Route::get('profile',array(
    'as'=>'profile-Auth::user()',
    'uses'=>'ProfileController@users'
  ));


Route::get('profile/{username}',array(
    'as'=>'profile-user',
    'uses'=>'ProfileController@user'
  ));


//Route::post('profile','AuthController@profile');
//Route::post('like','ProfileController@user');

//Route::post('/buildprofile','AuthController@buildprofile');


Route::get('editprofile',function(){
	return View::make('editprofile', array('user' => Auth::user()));
});

<<<<<<< HEAD
//*****************new******************
Route::get('profile/{username}/like',array(
    'as'=>'profile-user-like',
    'uses'=>'ProfileController@like'
  ));
//--------------------------------------*/
=======
>>>>>>> origin/master
 ?>