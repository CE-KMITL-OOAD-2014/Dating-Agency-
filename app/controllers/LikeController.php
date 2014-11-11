<?php
class LikeController extends BaseController {
	public function user($username){
		$user = User::where('username','=',$username);
		if($user->count()){
			$user=$user->first();
			return View::make('like.user')
				->with('user',$user);
		}
		return App::abort(404);
	}

      public function users(){       
			return View::make('profile')
				->with('users',User::all());

 		}


	

	public function like($username){
		/*$like = new Like;
 	    $like->user()->associate($user);
  		$like->save();*/
  		
		$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();


			$auth_user=Auth::user()->username;
			$user_like_username=$user_like->username;
			//check a like a -> Fail
			if($auth_user==$user_like_username){
						return View::make('like.like_fail');
					}
			//cheack like repeat
			$like = Like::where('user2','=',$user_like_username)->where('user1','=',$auth_user);
			if($like->count()){
					$like=$like->first();
					if($like->addfriend==1){
						return View::make('like.likematch', array('user' => Auth::user()))
						->with('user_like',$user_like);
					}
					else{
						return View::make('like.like', array('user' => Auth::user()))
						->with('user_like',$user_like);
					}
			}
			// check like match
			$like = Like::where('user1','=',$user_like_username)->where('user2','=',$auth_user);
			if($like->count()){
					$like=$like->first();
						Like::where('user1','=',$user_like_username)->where('user2','=',$auth_user)->update(array('addfriend'=>1));
						$like = new Like;
 	   	 				$like->user1=$auth_user;
 	    				$like->user2=$user_like_username;
 	    				$like->addfriend=1;
  						$like->save();
						return View::make('like.likematch', array('user' => Auth::user()))
						->with('user_like',$user_like);
					
					/*if($like->user2==$user_like_username){
						return View::make('profile.like', array('user' => Auth::user()))
						->with('user_like',$user_like);
					}*/
			}
			
			$like = new Like;
 	   	 	$like->user1=$auth_user;
 	    	$like->user2=$user_like_username;
 	    	$like->addfriend=0;
  			$like->save();

			return View::make('like.like', array('user' => Auth::user()))
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
						return View::make('like.dislike_fail');
					}

			$dislike = Like::where('user1','=',$auth_user);
			if($dislike->count()){
					$dislike = Like::where('user2','=',$user_dislike_username);
					$dislike=$dislike->first();
						if($dislike->addfriend==0){
							Like::where('user1','=',$auth_user)->where('user2','=',$user_dislike_username)->delete();
							return View::make('like.dislike', array('user' => Auth::user()))
							->with('user_dislike',$user_dislike);
						}
						//add friend already->return view
						else{
							//return View::make('profile.dislike_fail_addfriend');
							return View::make('like.dislike_fail_addfriend', array('user' => Auth::user()))
							->with('user_dislike',$user_dislike);
						}
				}
		}
		return View::make('like.dislike_fail');
    }

    public function all_friend(){
    	return View::make('like.allfriend', array('user' => Auth::user()))
							->with('likes',Like::All());

	   }

	   public function all_like(){
    	return View::make('like.alllike', array('user' => Auth::user()))
							->with('likes',Like::All());

    }

      public function likematch($username){
      	$user_like = User::where('username','=',$username);
		if($user_like->count()){
			$user_like=$user_like->first();
    		return View::make('like.likematch', array('user' => Auth::user()))
						->with('user_like',$user_like);
		}

    }
    
      	
 



}
?>