<?php
	class ProfilePicture{
		
		private $id;
		private $profile_id; //relation with class User
		private $profilepicture;
	
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->profile_id=0;
			$this->profilepicture=NULL;
		}

		//********** setting function *****************//
		public function setID($value){
			$this->id=$value;
		}
		public function setProfile_ID($value){
			$this->profile_id=$value;
		}
		public function setProfilePicture($value){
			$this->profilepicture=$value;
		}
		//***********************************************//

		//*************** getting function ***************//
		public function getID(){
			return $this->id;
		}
		public function getProfile_ID(){
			return $this->profile_id;
		}
		public function getProfilePicture(){
			return $this->profilepicture;
		}
		//***********************************************//

		//save to database
		public function saveProfilePicture(){
			$new=new ProfilePictureRepository();
			$new->id=$this->id;
			$new->profile_id=$this->profile_id;
			$new->profilepicture=$this->profilepicture;
			Input::file('profilepicture')->move('picture', $this->profilepicture);
			$new->save();
		}

		//serch by ID
		public static function getByID($id){
			$findID=ProfilePictureRepository::find($id);
			$new=new ProfilePicture;
			$new->id = $findID->id;
			$new->profile_id = $findID->profile_id;
			$new->profilepicture = $findID->profilepicture;
			return $new;
		}

		//edit profile picture
		public function editProfilePicture(){
			$obj=ProfilePictureRepository::find($this->id);
			Input::file('profilepicture')->move('picture', $this->profilepicture);
			$obj->profilepicture=$this->profilepicture;	
			$obj->save();
		}

		// serch by user's profile ID
		public static function getByProfile_ID($profileid){
			$find=ProfilePictureRepository::all();
			$size=count($find);
			for($i=0;$i<$size;$i++){  
				if($find[$i]->profile_id==$profileid){
					$new=new ProfilePicture;	
					$new->id=$find[$i]->id;
					$new->profile_id=$find[$i]->profile_id;
					$new->profilepicture=$find[$i]->profilepicture;
					return $new;
				}       
        	} return NULL;
				
		}
	}
