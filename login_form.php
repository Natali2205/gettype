<!--<form method="post" action="index.php?login" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username"/><br/>
        <label for="password">Password:</label><input type="password" name="password" id="password"/><br/>
        <input type="submit" name="login" id="login" value="Login"/>
        <?php
        if (isset($errors)) {
			?>
            <span class="text-danger"><?php echo $errors; ?></span>
            <?php
        } ?>
    </fieldset>
</form>
-->
<?php require_once 'base.php'; ?>
<form class="form-horizontal" role="form" action="?login" method="POST">
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-2">
      <input name="username" type="text" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-2">
      <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
      <div class="form-group">
   <label for="login" class="col-sm-2 control-label"></label>
    <div class="col-sm-2">
      <input type="submit" name="login" id="login" placeholder="Password" value="Login">
    </div>
  </div>
   <?php
        if (isset($errors)) {
			?>
            <span class="text-danger"><?php echo $errors; ?></span>
            <?php
    } ?>
</form>