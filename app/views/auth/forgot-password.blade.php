<h2>forgot-password</h2><br>
 {{ Form::open(array('to' => 'post_forgotPassword', 'class' => 'form-horizontal',
                'id' => 'edit-form', 'role' => 'form', 'files' => true))}}

<form  method="post">
<div class="field">
	Username: <input type="text" name="username"><br><br>
	Firstname: <input type="text" name="firstname"><br><br>
	Lastname: <input type="text" name="lastname"><br><br>
	Email : <input type="text" name="email"><br><br>
</div><br>
<input type="submit" value="CONFIRM">
{{Form::token()}}
</form>