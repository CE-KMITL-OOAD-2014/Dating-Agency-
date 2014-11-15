<?php

//control all about profile
class ProfileController extends BaseController {
	 
    //edit profile	  
    public function edit($username){  
     	$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('profile.editprofile')
			     ->with('user',$user);
		}
		return App::abort(404);
    } 
	 
    //update database after edit profile        
    public function update(){
    	$id = Input::get('id');
        $user = new Profile;
        $profile = $user->getByID($id);
    	if(Input::get('firstname')!=null)  $profile->setFirstname(Input::get('firstname'));
    	if (Input::get('lastname')!=null)  $profile->setLastname(Input::get('lastname'));
    	if (Input::get('age')!=null)  $profile->setAge(Input::get('age'));
    	if (Input::get('gender')!=null)    $profile->setGender(Input::get('gender'));
    	if (Input::get('work')!=null)  $profile->setWork(Input::get('work'));
    	if (Input::get('interest')!=null) $profile->setInterest(Input::get('interest'));
		if (Input::get('tel')!=null)   $profile->setTel(Input::get('tel'));  	
    	if (Input::get('email')!=null)  $profile->setEmail(Input::get('email'));
    	if (Input::get('facebook')!=null)  $profile->setFacebook(Input::get('facebook'));
    	if (Input::get('lineid')!=null)  $profile->setLineID(Input::get('lineid'));
        $profile->editProfile();
        if (Input::file('profilepicture')!=null) { 
            $user = new ProfilePicture;
            $profilepicture = $user->getByID($id);
            //random name of picture
            $profilepicture_name = Str::random(20).'.jpg';
            $profilepicture->setProfilePicture($profilepicture_name);
            $profilepicture->editProfilePicture();

        }
    	return Redirect::to('/showprofile');
    }

    //show user profile
    public function showprofile(){  
        $user=Auth::user();
        //get user's profile 
        $profile=new Profile;
        $profile_user = $profile->getByUser_ID($user->id);
        //get user's profile picture
        $profilepicture=new ProfilePicture;
        $profilepicture_user = $profilepicture->getByProfile_ID($profile_user->getID());
        return View::make('profile.showprofile')
            ->with(array("username"=>$user->username,
                "firstname"=>$profile_user->getFirstname(),
                "lastname"=>$profile_user->getLastname(),
                "age"=>$profile_user->getAge(),
                "gender"=>$profile_user->getGender(),
                "work"=>$profile_user->getWork(),
                "interest"=>$profile_user->getInterest(),
                "tel"=>$profile_user->getTel(),
                "email"=>$profile_user->getEmail(),
                "facebook"=>$profile_user->getFacebook(),
                "lineid"=>$profile_user->getLineID(),
                "profilepicture"=>$profilepicture_user->getProfilePicture()
                ));

    } 

}
?>
		
		
