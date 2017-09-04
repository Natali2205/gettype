<?php 
include "base.php"; 

require 'header.php';
if (loginAfterRegister()){
	?>
	
	<p>Thanks for register in!You are <code><?=$_SESSION['username']?></code> </p>
<?php	
}
if( isLogin()){


   ?>
 
    <h1>User Area</h1>
    <p>Thanks for logging in! You are <code><?=$_SESSION['username']?></code> </p>
      
   <?php
}

else
{
    ?>
     
   <h1>User Login</h1>
     
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
     
    <form method="post" action="index.php?login" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <input type="submit" name="login" id="login" value="Login" />
		
    </fieldset>
    </form>
     
   <?php
   
}
?>



<?php
require 'menu.php';
if (isset($_GET['main'])) {
    require_once __DIR__ . '/content.php';
}
require 'content.php';
require 'footer.php';
