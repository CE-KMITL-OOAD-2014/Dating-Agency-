Profilephoto
<br>
 {{Form::open(array('url'=>'/uploadphoto','files'=>true))}}
 image : {{Form::file('image')}}
 <br>
 {{Form::submit('save')}}
 {{Form::close()}}