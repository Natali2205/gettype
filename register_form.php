<?php require_once 'base.php'; ?>
<form method="post" action="index.php?register" name="registerform" id="registerform">
    <fieldset>
	    <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="register" id="register" value="Register" /><br />
		<?php
   if ( isset($errMSG) ) {
     ?>
	 <span class="text-danger"><?php echo $error; ?></span>
   <?php
   }?>
	</fieldset>
</form>