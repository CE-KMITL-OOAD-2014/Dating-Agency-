<?php
	class Profile{

		private $id;
		private $firstname;
		private $lastname;
		private $age;
		private $gender;
		private $work;
		private $interest;
		private $tel;
		private $email;
		private $facebook;
		private $lineid;
		
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->firstname=NULL;
			$this->lastname=NULL;
			$this->age=NULL;
			$this->gender=NULL;
			$this->work=NULL;
			$this->interest=NULL;
			$this->tel=NULL;
			$this->email=NULL;
			$this->facebook=NULL;
			$this->lineid=NULL;
		}

		//set every parameter at the same time
		public function set($firstname,$lastname,$age,$gender,$work,$interest,$tel,$email,$facebook,$lineid){
			$this->firstname=$firstname;
			$this->lastname=$lastname;
			$this->age=$age;
			$this->gender=$gender;
			$this->work=$work;
			$this->interest=$interest;
			$this->tel=$tel;
			$this->email=$email;
			$this->facebook=$facebook;
			$this->lineid=$lineid;
		}

		//********************* setting function*********************//
		public function setId($value){
			$this->id=$value;
		}
		public function setFirstname($value){
			$this->firstname=$value;
		}
		public function setLastname($value){
			$this->lastname=$value;
		}
		public function setAge($value){
			$this->age=$value;
		}		
		public function setGender($value){
			$this->gender=$value;
		}
		public function setWork($value){
			$this->work=$value;
		}
		public function setInterest($value){
			$this->interest=$value;
		}
		public function setTel($value){
			$this->tel=$value;
		}
		public function setEmail($value){
			 $this->email=$value;
		}
		public function setFacebook($value){
			$this->facebook=$value;
		}
		public function setLineID($value){
			$this->lineid=$value;
		}
		//************************************************//

		//************* getting function *****************//
		public function getId(){
			return $this->id;
		}
		public function getFirstname(){
			return $this->firstname;
		}
		public function getLastname(){
			return $this->lastname;
		}
		public function getAge(){
			return $this->age;
		}		
		public function getGender(){
			return $this->gender;
		}
		public function getWork(){
			return $this->work;
		}
		public function getInterest(){
			return $this->interest;
		}
		public function getTel(){
			return $this->tel;
		}
		public function getEmail(){
			 return $this->email;
		}
		public function getFacebook(){
			return $this->facebook;
		}
		public function getLineID(){
			return $this->lineid;
		}
		//*********************************************************//

		// save to database
		public function saveProfile(){
			$new=new ProfileRepository();
			$new->id=$this->id;
			$new->firstname=$this->firstname;
			$new->lastname=$this->lastname;
			$new->age=$this->age;
			$new->gender=$this->gender;
			$new->work=$this->work;
			$new->interest=$this->interest;
			$new->tel=$this->tel;
			$new->email=$this->email;
			$new->facebook=$this->facebook;
			$new->lineid=$this->lineid;	
			$new->save();
		}

		// search profile by ID
		public static function getByID($id){
			$findID=ProfileRepository::find($id);
			$new=new Profile;
			$new->id=$findID->id;
			$new->firstname=$findID->firstname;
			$new->lastname=$findID->lastname;
			$new->age=$findID->age;
			$new->gender=$findID->gender;
			$new->work=$findID->work;
			$new->interest=$findID->interest;
			$new->tel=$findID->tel;
			$new->email=$findID->email;
			$new->facebook=$findID->facebook;
			$new->lineid=$findID->lineid;
			return $new;
		}

		//edit profile -> edit database
		public function editProfile(){
			$obj=ProfileRepository::find($this->id);
			$obj->firstname=$this->firstname;
			$obj->lastname=$this->lastname;
			$obj->age=$this->age;
			$obj->gender=$this->gender;
			$obj->work=$this->work;
			$obj->interest=$this->interest;
			$obj->tel=$this->tel;
			$obj->email=$this->email;
			$obj->facebook=$this->facebook;
			$obj->lineid=$this->lineid;	
			$obj->save();
		}
	}