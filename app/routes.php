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

//user login to website
Route::post('/login', function(){
  $credentials = Input::only('username', 'password');
  if(Auth::attempt($credentials)){
    return Redirect::to('showprofile');
  }
  return Redirect::to('register');
});

//user logout
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('register');
});

//get register page view
Route::get('/register',function(){
  return View::make('register');
});

//post data to register page
Route::post('/register','AuthController@register');

//get buildprofile page view
Route::get('/buildprofile',function(){
  return View::make('buildprofile');
});

//post data to buildprofile page
Route::post('/buildprofile','AuthController@register');

//get showprofile page view
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

Route::get('profile/{username}/like',array(
    'as'=>'profile-user-like',
    'uses'=>'ProfileController@like'
  ));

Route::get('profile/{username}/dislike',array(
    'as'=>'profile-user-dislike',
    'uses'=>'ProfileController@dislike'
  ));

// Route::get('/profile/{username}/virtualitem',array(
//     'as'=>'profile-user-insertvirtualitem',
//     'uses'=>'AuthController@virtual'
//   ));

Route::get('/profile/{username}/chatbox',array(
    'as'=>'profile-user-chatbox',
    'uses'=>'ChatController@chat'
  ));
Route::post('/profile/{username}/chatbox',array(
    'as'=>'profile-user-chatbox-send',
    'uses'=>'ChatController@send_message'
  ));
Route::get('/recieve-message',array(
    'uses'=>'ChatController@recieve_message'
  ));

// Route::get('/sendvirtualsuccess',function(){
//   return View::make('sendvirtualsuccess');
// });


// Route::get('/profile/{username}/insertvirtualitem',function(){
//   return View::make('insertvirtualitem');
// });


// Route::post('/profile/{username}/insertvirtualitem','AuthController@virtual');


 ?>