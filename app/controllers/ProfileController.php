<?php
class ProfileController extends BaseController {
	public function user($username){
		$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('profile.user')
				->with('user',$user);
		}
		return App::abort(404);
	}

      public function users(){       
			return View::make('profile')
				->with('users',User::all());

 		}


	public function like($username){
		$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();


			$auth_user=Auth::user()->username;
			$user_like_username=$user_like->username;
			//check a like a -> Fail
			if($auth_user==$user_like_username){
						return View::make('profile.like_fail');
					}
			// check like match
			$like = Like::where('user1','=',$user_like_username)->where('user2','=',$auth_user);
			if($like->count()){
					//$like = Like::where('user2','=',$auth_user);
					$like=$like->first();
						Like::where('user1','=',$user_like_username)->where('user2','=',$auth_user)->update(array('addfriend'=>1));
						$like = new Like;
 	   	 				$like->user1=$auth_user;
 	    				$like->user2=$user_like->username;
 	    				$like->addfriend=1;
  						$like->save();
						return View::make('profile.likematch', array('user' => Auth::user()))
						->with('user_like',$user_like);
			}
			
			$like = new Like;
 	   	 	$like->user1=$auth_user;
 	    	$like->user2=$user_like->username;;
 	    	$like->addfriend=0;
  			$like->save();

			return View::make('profile.like', array('user' => Auth::user()))
				->with('user_like',$user_like);
		}
		return App::abort(404);
    }


    public function dislike($username){
    	$user_dislike = User::where('username','=',$username); 
		if($user_dislike->count()){
			$user_dislike=$user_dislike->first();

			$auth_user=Auth::user()->username;
			$user_dislike_username=$user_dislike->username;

			if($auth_user==$user_dislike_username){
						return View::make('profile.dislike_fail');
					}

			$dislike = Like::where('user1','=',$auth_user);
			if($dislike->count()){
					$dislike = Like::where('user2','=',$user_dislike_username);
					$dislike=$dislike->first();
						if($dislike->addfriend==0){
							Like::where('user1','=',$auth_user)->where('user2','=',$user_dislike_username)->delete();
							Like::where('user2','=',$auth_user)->where('user1','=',$user_dislike_username)->delete();
							return View::make('profile.dislike', array('user' => Auth::user()))
							->with('user_dislike',$user_dislike);
						}
						//add friend already->return view
						else{
							//return View::make('profile.dislike_fail_addfriend');
							return View::make('profile.dislike', array('user' => Auth::user()))
							->with('user_dislike',$user_dislike);
						}
				}
		}
		return View::make('profile.dislike_fail');

    }
      	
 



}
?>