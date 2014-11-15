<?php
	class ProfilePicture{
		
		private $id;
		private $profilepicture;
	
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->profilepicture=NULL;
		}

		//********** setting function *****************//
		public function setID($value){
			$this->id=$value;
		}
		public function setProfilePicture($value){
			$this->profilepicture=$value;
		}
		//***********************************************//

		//*************** getting function ***************//
		public function getID(){
			return $this->id;
		}
		public function getProfilePicture(){
			return $this->profilepicture;
		}
		//***********************************************//

		//save to database
		public function saveProfilePicture(){
			$new=new ProfilePictureRepository();
			$new->id=$this->id;
			$new->profilepicture=$this->profilepicture;
			Input::file('profilepicture')->move('picture', $this->profilepicture);
			$new->save();
		}

		//serch by ID
		public static function getByID($id){
			$findID=ProfilePictureRepository::find($id);
			$new=new ProfilePicture;
			$new->id = $findID->id;
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
	}
