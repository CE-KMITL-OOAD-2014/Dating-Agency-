<?php

class PhotoController extends BaseController {
	

	public function photocontroll(){
		$image = Input::file('image');
		$filename = $image->getClientOriginalName();
		//$product = new Product;
		$user->image=$filename;

		$saveflag = $user->save();
		if($saveflag){
			//return Redirect::('/showprofile');
			return "print";
		}
	}
}
?>