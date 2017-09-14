<form method="post" action="index.php?login" name="loginform" id="loginform">
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

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
</form>