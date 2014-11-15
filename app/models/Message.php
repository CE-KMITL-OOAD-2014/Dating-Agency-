<?php
	class Message{

		private $id;
		private $chatbox_id; //relation with chass Chat
		private $sender;
		private $receiver;
		private $message;
		private $read;
		
		//constructure function
		public function __construct(){
			$this->id=NULL;
			$this->chatbox_id=NULL;
			$this->sender=NULL;
			$this->receiver=NULL;
			$this->message=NULL;
			$this->read=0;
		}

		//*************** setting function ***********//
		public function setID($value){
			$this->id=$value;
		}
		public function setSender($value){
			$this->sender=$value;
		}
		public function setReceiver($value){
			$this->receiver=$value;
		}
		public function setChatbox_id($value){
			$this->chatbox_id=$value;
		}
		public function setMessage($value){
			$this->message=$value;
		}	
		public function setRead($value){
			$this->read=$value;
		}
		//***********************************************//

		//************ getting function*****************//
		public function getID(){
			return $this->id;
		}	
		public function getSender(){
			return $this->sender;
		}
		public function getReceiver(){
			return $this->receiver;
		}
		public function getChatvox_id(){
			return $this->chatbox_id;
		}
		public function getMessage(){
			return $this->MessageRepositoryessage;
		}
		public function getRead(){
			return $this->read;
		}	
		//********************************************//	
		
		//relation with class chat
		public function chat()
		{
			return $this->belongsTo('Chat');
		}

		//save to database
		public function saveMessage(){
			$new=new MessageRepository();
			$new->id=$this->id;
			$new->sender=$this->sender;
			$new->receiver=$this->receiver;
			$new->chatbox_id=$this->chatbox_id;
			$new->message=$this->message;
			$new->read=$this->read;	
			$new->save();
		}

		//after user read message , set up database
		public function toRead(){
			$obj=MessageRepository::all();
			$size=count($obj);
			//find messege that user read
			for($i=0;$i<$size;$i++){  
				if($obj[$i]->receiver == $this->receiver) {
					$new=MessageRepository::find($obj[$i]->id);
                	$new->sender=$obj[$i]->sender;
                	$new->receiver=$obj[$i]->receiver;
                	$new->message=$obj[$i]->message;
                	$new->chatbox_id=$obj[$i]->chatbox_id;
                	$new->read=1;
                	$new->save();
				}       
        	}
        }

        //have message or not??
        public function hasMessage(){
			$obj=MessageRepository::find(1);
			if($obj==NULL) return 0;
			else return 1;
        }

	}