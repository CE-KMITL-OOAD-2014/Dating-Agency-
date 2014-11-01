<?php

class AuthController extends BaseController {
	

	public function register(){
		$user = new User();

		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->age = Input::get('age');
		$user->gender = Input::get('gender');
		$user->work = Input::get('work');
		$user->interest = Input::get('interest');
		$user->tel = Input::get('tel');
		$user->email = Input::get('email');
		$user->facebook = Input::get('facebook');
		$user->lineid = Input::get('lineid');
        $user->profilepicture = Input::file('profilepicture')->getClientOriginalName();
        Input::file('profilepicture')->move('picture', $user->profilepicture);
	    $user->save();
        $credentials = Input::only('username', 'password');
        if(Auth::attempt($credentials)){
        return Redirect::to('/showprofile');
   		 }  	
    }

      public function profile(){  
    	   
       		 return Redirect::make('/profile');  	
    }

}    
?>
		
		
