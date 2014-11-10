<h2>forgot-password</h2>
<form  method="post">
<div class="field">
	Username: <input type="text" name="username">
</div>
<input type="submit" value="Recover">
{{Form::token()}}
</form>