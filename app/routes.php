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
  return View::make('auth.register');
});

//post data to register page
Route::post('/register','AuthController@register');

//get buildprofile page view
Route::get('/buildprofile',function(){
  return View::make('profile.buildprofile');
});

//post data to buildprofile page
Route::post('/buildprofile','AuthController@register');

//get showprofile page view
Route::get('/showprofile', function(){
  return View::make('profile.showprofile', array('user' => Auth::user()));

});

Route::post('/showprofile','ProfileController@profile');

Route::get('/profile',array(
    'as'=>'profile-Auth::user()',
    'uses'=>'ProfileController@profile'
  ));

Route::get('/profile/{username}',array(
    'as'=>'profile-user',
    'uses'=>'LikeController@user'
  ));

Route::get('editprofile/{username}',array(
    'as'=>'editprofile-user',
    'uses'=>'ProfileController@edit'
  ));

Route::post('editprofile/{username}',array(
   'as'=>'editprofile-user',
    'uses'=>'ProfileController@update'
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
Route::get('/change_password_success',function(){
  return View::make('auth.change_password_success');
});
Route::get('profile/{username}/like',array(
    'as'=>'profile-user-like',
    'uses'=>'LikeController@like'
  ));
Route::get('profile/{username}/likematch',array(
  'as'=> 'profile-user-likematch',
  'uses'=>'LikeController@likematch'
  ));
Route::get('profile/{username}/dislike',array(
    'as'=>'profile-user-dislike',
    'uses'=>'LikeController@dislike'
  ));
Route::get('/show_all_friends',array(
    'uses'=>'LikeController@all_friend'
  ));
Route::get('/show_all_likes',array(
    'uses'=>'LikeController@all_like'
  ));


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



Route::get('/profile/{username}/virtualitem',array(
     'as'=>'profile-user-virtualitem',
     'uses'=>'VirtualController@virtual'
   ));
Route::get('/profile/{username}/sendvirtualsuccess/{virtualid}',array(
     'as'=>'profile-user-sendvirtualsuccess-virtualid',
     'uses'=>'VirtualController@sendvirtual'
   ));
Route::get('/recieve-virtual',array(
    'uses'=>'VirtualController@recieve_virtual'
  ));


// Route::get('/profile/{username}/insertvirtualitem',function(){
//   return View::make('insertvirtualitem');
// });


// Route::post('/profile/{username}/insertvirtualitem','AuthController@virtual');


 ?>