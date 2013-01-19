<div class="container">
	<form class="form-signin" action="admin.php" method="POST">
		<h2 class="form-signin-heading">Bitte einlogen</h2>
		<input id="username" name="username" type="text" class="input-block-level" placeholder="Username">
		<input id="passwort" name="passwort" type="password" class="input-block-level" placeholder="Passwort">
		<button class="btn btn-large btn-primary" type="submit">Login</button>
		<?php 
			if (isset($loginError) && $loginError != "") {
				echo '<div style="margin-top: 5px;"><b>' . $loginError . '</b></div>';
			}
		 ?>
	</form>
</div> <!-- /container -->