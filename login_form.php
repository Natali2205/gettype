<form method="post" action="index.php?login" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="username" id="username"/><br/>
        <label for="password">Password:</label><input type="password" name="password" id="password"/><br/>
        <input type="submit" name="login" id="login" value="Login"/>
        <?php
        if (isset($errors)) {
			?>
            <span class="text-danger"><?php echo $error; ?></span>
            <?php
        } ?>
    </fieldset>
</form>