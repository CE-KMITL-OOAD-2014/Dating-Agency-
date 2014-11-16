<?php

//controll all about register
class AuthController extends BaseController {
	

	public function register(){	    
	  	//sign in
        $credentials = Input::only('username', 'password');
        if(Auth::attempt($credentials)){
        	return Redirect::to('/showprofile');
   		}  	
    }

    //when user forgot password
    public function get_forgotPassword(){
    	return View::make('auth.forgot-password');
	}

	//identified user
	public function post_forgotPassword(){
	 	$user = User::where('username','=',Input::get('username'));
	 	if($user->count()){
	 		$user=$user->first();
	 		$user_profile=new Profile;
	 		$profile = $user_profile->getByUser_ID($user->id);
	 		$firstname = $profile->getFirstname();
	 		$lastname = $profile->getLastname();
	 		$email = $profile->getEmail();
	 		if($firstname==Input::get('firstname')&& 
	 			$lastname==Input::get('lastname')&&
	 			$email==Input::get('email')
	 			){
	 			return View::make('auth.change-password')
					->with('user',$user);
			}

	 	}
    	return Redirect::to('forgot-password');
    }

    //insert new password
    public function get_updatePassword($username){  
     	$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('auth.update-password')
				->with('user',$user);
		}
		return App::abort(404);
	}

	//update user's password
	public function post_updatePassword(){
	 		if(Input::get('new_password')!=null){
    			User::where('id','=',Input::get('id'))->update(array('password'=>Hash::make(Input::get('new_password'))));
    			$user=User::where('id','=',Input::get('id'));
    			if($user->count()){
    				$user=$user->first();
    				return Redirect::to('/change_password_success'); 	
				}		
			}
 			return Redirect::to('/forgot-password');
	}

	public function new_user(){
	//new user
		$validate=User::validate(Input::all());
		if($validate->passes()){
			$user = new UserStatus;
			$user->setUsername(Input::get('username'));
			$user->setPassword(Hash::make(Input::get('password')));
			$user->saveUser();

			$userid=$user->getByUsername(Input::get('username'));

			$profile = new Profile;
			$profile->setUser_ID($userid->getID());
			$profile->setFirstname(Input::get('firstname'));
			$profile->setLastname(Input::get('lastname'));
			$profile->setAge(Input::get('age'));
			$profile->setGender(Input::get('gender'));
			$profile->setWork(Input::get('work'));
			$profile->setInterest(Input::get('interest'));
			$profile->setTel(Input::get('tel'));
			$profile->setEmail(Input::get('email'));
			$profile->setFacebook(Input::get('facebook'));
			$profile->setLineID(Input::get('lineid'));
			$profile->saveProfile();

			$profileid=$profile->getByUser_ID($profile->getUser_ID());

			$profilepicture_name = Str::random(20).'.jpg';
			$profilepicture = new ProfilePicture; 
			$profilepicture->setProfile_ID($profileid->getID());
			$profilepicture->setProfilePicture($profilepicture_name);
			$profilepicture->saveProfilePicture();

	  	//sign in
			$credentials = Input::only('username', 'password');
			if(Auth::attempt($credentials)){
				return Redirect::to('/showguideline');
			}  	
		}
		else{
			return Redirect::to('/buildprofile')
			->withErrors($validate->messages());
		}
	}
	
}
?>
		
		
