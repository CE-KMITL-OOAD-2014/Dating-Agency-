<?php

//control all about like system
class LikeController extends BaseController {

	//show other user's profile that salected
	public function other_user_profile($username){
		$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			$profile=new Profile;
        	$profile_user = $profile->getByID($user->id);
        	//get user's profile picture
        	$profilepicture=new ProfilePicture;
        	$profilepicture_user = $profilepicture->getByID($user->id);
			return View::make('like.user')
				->with(array("username"=>$user->username,
                "firstname"=>$profile_user->getFirstname(),
                "lastname"=>$profile_user->getLastname(),
                "age"=>$profile_user->getAge(),
                "gender"=>$profile_user->getGender(),
                "work"=>$profile_user->getWork(),
                "interest"=>$profile_user->getInterest(),
                "profilepicture"=>$profilepicture_user->getProfilePicture()
                ));
		}
		return App::abort(404);
	}

	//show all user
    public function show_all_users(){       
		return View::make('profile.profile')
			->with('users',User::all());
 	}

 	//like management system
	public function like($username){	
		//user_like mean user who is liked by the user
		$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();
			$user_like_id=$user_like->id;
			//auth_user mean user that like
			$auth_user=Auth::user()->username;
			$user_like_username=$user_like->username;
			//check like yourself -> user 'aaa' like user 'aaa' -> like fail
			if($auth_user==$user_like_username){
				return View::make('like.like_fail');
			}
			//cheack like repeat
			$like=new Like;
			$likestate = $like->isLike($auth_user,$user_like_username);
			//when like repeat
			if($likestate!=NULL){
				if($likestate->getLikematchstate()==1){
        			//get user's profile 
					$profile=new Profile;
					$profile_user = $profile->getByID($user_like_id);
        			//get user's profile picture
					$profilepicture=new ProfilePicture;
					$profilepicture_user = $profilepicture->getByID($user_like_id);
					return View::make('like.likematch', array('user' => Auth::user()))
						->with(array("username"=>$user_like_username,
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
				else{
					return View::make('like.like', array('user' => Auth::user()))
						->with(array("username"=>$user_like_username));
				}
			}
			// check like match -> user 'aaa' like user 'bbb' and user 'bbb' like user 'aaa' too
			// check likestate other user
			$likestate = $like->isLike($user_like_username,$auth_user);
			if($likestate!=NULL){
					//when like match , update likematchstate
					$likestate->Likematch();
					$new=new Like;
					$new->setUser_sendlike($auth_user);
					$new->setUser_receivelike($user_like_username);
					$new->setLikematchstate(1);
					$new->like();	
					//get user's profile 
					$profile=new Profile;
					$profile_user = $profile->getByID($user_like_id);
        			//get user's profile picture
					$profilepicture=new ProfilePicture;
					$profilepicture_user = $profilepicture->getByID($user_like_id);
					return View::make('like.likematch', array('user' => Auth::user()))
						->with(array("username"=>$user_like_username,
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
			//when like not match	
			$like = new like;
			$like->setUser_sendlike($auth_user);
			$like->setUser_receivelike($user_like_username);
			$like->like();
			return View::make('like.like', array('user' => Auth::user()))
				->with(array("username"=>$user_like_username));
		}
		//return App::abort(404);
    }

    //dislike management system
    public function dislike($username){
    	//user_dislike = user who is disliked by the user
    	$user_dislike = User::where('username','=',$username); 
		if($user_dislike->count()){
			$user_dislike=$user_dislike->first();
			//auth_user mean user that dislike
			$auth_user=Auth::user()->username;
			$user_dislike_username=$user_dislike->username;
			//check dislike yourself -> user 'aaa' dislike user 'aaa' -> dislike fail
			if($auth_user==$user_dislike_username){
				return View::make('like.dislike_fail');
			}
			//check like match already -> can't dislike
			$likestate = new like;
			$dislike = $likestate->isLike($auth_user,$user_dislike_username);
			//$dislike = LikeRepository::where('user1','=',$auth_user);
			if($dislike!=NULL){
				//$dislike = Like::where('user2','=',$user_dislike_username);
				//$dislike=$dislike->first();
				if($dislike->getLikematchstate()==0){
					$dislike->dislike();
					//LikeRepository::where('user1','=',$auth_user)->where('user2','=',$user_dislike_username)->delete();
					return View::make('like.dislike', array('user' => Auth::user()))
						->with(array("user_dislike"=>$user_dislike_username));
				}
				//add friend already -> can't dislike -> return view
				else{
					return View::make('like.dislike_fail_addfriend', array('user' => Auth::user()))
						->with(array("user_dislike"=>$user_dislike_username));
				}
			}
		}
		return View::make('like.dislike_fail');
    }

    //show all user that like together
    public function all_friend(){
    	$like = new Like;
		$allLike = $like->getAll();
    	return View::make('like.allfriend', array('user' => Auth::user()))
			->with('likes',$allLike);
	}

	 //show all user that user like but don't like together
	public function all_like(){
		$like = new Like;
		$allLike = $like->getAll();
		return View::make('like.alllike', array('user' => Auth::user()))
		->with('likes',$allLike);
	}

    //when like match -> show profile and contract information
    public function likematch($username){
      	$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();
			$profile=new Profile;
			$profile_user = $profile->getByID($user_like->id);
			$user_like_username=$user_like->username;
        	//get user's profile picture
			$profilepicture=new ProfilePicture;
			$profilepicture_user = $profilepicture->getByID($user_like->id);
			return View::make('like.likematch', array('user' => Auth::user()))
			->with(array("username"=>$user_like_username,
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
    
      	
}
?>