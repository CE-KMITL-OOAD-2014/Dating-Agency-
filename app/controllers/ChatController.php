<?php
class ChatController extends BaseController {
	//message box
	public function chat($username){
		$user_recieve = User::where('username','=',$username);
		if($user_recieve->count()){
			$user_recieve=$user_recieve->first();

			return View::make('chat.chat', array('chats'=> Chat::All(),'user_send' => Auth::user()))
						->with('user_recieve',$user_recieve);
		}
		return App::abort(404);
	}
	//send message
    public function send_message($username){
    	$user_recieve = User::where('username','=',$username);
		if($user_recieve->count()){
			$user_recieve=$user_recieve->first();
    		if(Input::get('message')!=null) {
    			$chat = new Chat();
    			$chat->sender=Auth::user()->username;
    			$chat->reciever=$user_recieve->username;
    			$chat->message = Input::get('message');
    			$chat->read=0;
 				$chat->save();
	    
    			 return View::make('chat.chat', array('chats'=> Chat::All(),'user_send' => Auth::user()))
						->with('user_recieve',$user_recieve);
    		}	
    		return View::make('chat.chat', array('chats'=> Chat::All(),'user_send' => Auth::user()))
						->with('user_recieve',$user_recieve);
		}
		return App::abort(404);
	}

	 public function recieve_message(){
	 	$reciever = Auth::user();
	 	$chat=Chat::where('reciever','=',$reciever->username);
    	if($chat->count()){
    		//Chat::where('read','=','1')->delete();
    		Chat::where('reciever','=',$reciever->username)->where('read','=','0')->update(array('read'=>1));
    		return View::make('chat.recieve-message', array('chats' => Chat::All(),'user'=>$reciever));
    	}
    	return View::make('chat.no-message');
	}

}
?>