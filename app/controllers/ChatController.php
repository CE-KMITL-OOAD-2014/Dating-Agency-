<?php
class ChatController extends BaseController {
	//message box
	public function chat($username){
		$user_receive = User::where('username','=',$username);
		if($user_receive->count()){
			$user_receive=$user_receive->first();
			$chatbox=new Chat;
			$chatbox->setSender(Auth::user()->username);
			$chatbox->setReceiver($user_receive->username);
			$chat=$chatbox->getChatbox();
			//when never create chatbox
			if($chat==NULL){
 				$chatbox=$chatbox->createChatbox();
 				return View::make('chat.chat', array('chats'=>NULL,'user_send' => Auth::user()))
				->with(array("user_receive"=>$user_receive->username));
			}
			//if don't have meesage
			$status=$chatbox->getMessageAll();
			if($status==NULL){
				return View::make('chat.chat', array('chats'=>NULL,'user_send' => Auth::user()))
				->with(array("user_receive"=>$user_receive->username));
			}
			else{
				return View::make('chat.chat', array('chats'=> $status,'user_send' => Auth::user()))
				->with(array("user_receive"=>$user_receive->username));
			}
			
		}
		return App::abort(404);
	}

	//send message
    public function send_message($username){
    	$user_receive = User::where('username','=',$username);
		if($user_receive->count()){
			$user_receive=$user_receive->first();
			//have message??
    		if(Input::get('message')!=null) {
    			//find a chatbox
    			$chatbox = new Chat;
				$chatbox->setSender(Auth::user()->username);
				$chatbox->setReceiver($user_receive->username);
				$chat=$chatbox->getChatbox();
				if($chat==NULL){
 					$chatbox=$chatbox->createChatbox();
 				}
 				//save message
				$message = new Message;
				$message->setMessage(Input::get('message'));
				$message->setChatbox_id($chat->getID());
				$message->setSender(Auth::user()->username);
				$message->setReceiver($user_receive->username);
				$message->saveMessage();
 				$message_status = $chat->getMessageAll();
 				return View::make('chat.chat', array('chats'=> $message_status,'user_send' => Auth::user()))
				->with(array("user_receive"=>$user_receive->username));
    		}	
    		else{
    		//if don't have message -> return to previous page
    			$chatbox = new Chat;
				$chatbox->setSender(Auth::user()->username);
				$chatbox->setReceiver($user_receive->username);
    		 	$message_status = $chatbox->getMessageAll();
 				return View::make('chat.chat', array('chats'=> $message_status,'user_send' => Auth::user()))
				->with(array("user_receive"=>$user_receive->username));
			}
		}
		return App::abort(404);
	}

	//show message that recieved
	public function receive_message(){
	 	$receiver = Auth::user();
	 	//find a chatbox
    	$chatbox = new Chat;
		//$chatbox->setSender($receiver->username);
		$chatbox->setReceiver(Auth::user()->username);
    	//$chat=$chatbox->getChatbox();
    	$message = $chatbox->getMessageByUsername(Auth::user()->username);
    	//when don't have message to receive
    	if($message==NULL){
    		return View::make('chat.no-message');
    	}
    	else{
    		//update database
    		$chatbox->toRead();
    		return View::make('chat.receive-message', array('chats' => $message,'user'=>$receiver))
    		->with(array("user_receive"=>$receiver->username));
    	}	
	}

}
?>