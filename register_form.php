<?php require_once 'base.php'; ?>


<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
      <div class="form-group">
   <label for="register" class="col-sm-2 control-label"></label>
    <div class="col-sm-2">
      <input type="submit" name="register" id="register" placeholder="register" value="Register">
    </div>
  </div>
   	<?php
   if ( isset($errMSG) ) {
     ?>
	 <span class="text-danger"><?php echo $error; ?></span>
   <?php
   }?>
</form>