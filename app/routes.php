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

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('register');
});

Route::get('/register',function(){
  return View::make('register');
});

Route::post('/register','AuthController@register');

Route::get('/buildprofile',function(){
  return View::make('buildprofile');
});

Route::post('/buildprofile','AuthController@register');

Route::get('/showprofile', function(){
  return View::make('showprofile', array('user' => Auth::user()));

});


Route::post('/showprofile','AuthController@profile');

Route::get('/profile',array(
    'as'=>'profile-Auth::user()',
    'uses'=>'ProfileController@users'
  ));

Route::get('/profile/{username}',array(
    'as'=>'profile-user',
    'uses'=>'ProfileController@user'
  ));

Route::get('editprofile/{username}',array(
    'as'=>'editprofile-user',
    'uses'=>'AuthController@edit'
  ));

Route::post('editprofile/{username}',array(
   'as'=>'editprofile-user',
    'uses'=>'AuthController@update'
  ));

Route::get('/forgot-password',array(
    'uses'=>'AuthController@get_forgotPassword'
  ));

Route::post('/forgot-password',array(
    'uses'=>'AuthController@post_forgotPassword'
  ));

Route::get('/change-password/{username}',array( 
  'as'=>'change-password-user',
    'uses'=>'AuthController@get_updatepassword'
  ));

Route::post('/change-password/{username}',array(
  'as'=>'change-password-user',
    'uses'=>'AuthController@post_updatepassword'
  ));

oute::get('profile/{username}/like',array(
    'as'=>'profile-user-like',
    'uses'=>'ProfileController@like'
  ));

Route::get('profile/{username}/dislike',array(
    'as'=>'profile-user-dislike',
    'uses'=>'ProfileController@dislike'
  ));

Route::get('/profile/{username}/insertvirtualitem',array(
    'as'=>'profile-user-insertvirtualitem',
    'uses'=>'AuthController@virtual'
  ));

// Route::get('/sendvirtualsuccess',function(){
//   return View::make('sendvirtualsuccess');
// });


// Route::get('/profile/{username}/insertvirtualitem',function(){
//   return View::make('insertvirtualitem');
// });


// Route::post('/profile/{username}/insertvirtualitem','AuthController@virtual');


 ?>