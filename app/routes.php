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

Route::get('profile',function(){
	$username = "";
	if(isset(Auth::user()->username)){
		$username = Auth::user()->username;
}
	return View::make('profile', array('user' => Auth::user()));

});

//Route::post('/buildprofile','AuthController@buildprofile');


// Route::post('form-submit', function(){
//  return Input::file('profilepicture')->getClientOriginalExtension();
// });

// Route::post('form-submit', function(){
//  return Input::file('profilefile')->move(__DIR__.'/storage/',Input::file('profilepicture')->getClientOriginalName());
// });
// Route::get('/uploadphoto',function(){
// 	return View::make('/uploadphoto');
// });

// Route::post('/uploadphoto','PhotoController@uploadphoto');


// Route::get('/save', function(){
//     Auth::save();
//     return Redirect::to('/showprofile');
// });

Route::get('editprofile',function(){
	return View::make('editprofile', array('user' => Auth::user()));
});

 ?>