<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
if ($username === "BilNil" && $password === "secret") {
    $_SESSION["customer"] = 1;
} else if ($username === "NilBil" && $password === "secret1") {
    $_SESSION["customer"] = 2;
}
if ($_SESSION["customer"]) {
    header("Location: index.php");
}



?>
<div class="col-md-9 ">
<form action="login.php" method="post">
    <table>
        <tr>
            <td></td>
            <td>Login</td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input name="username" type="text" value="<?php echo $username; ?>"></td>
        </tr>
        <tr>
            <td>Passwors</td>
            <td><input type="password" name="password"</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="login"</td>
        </tr>
    </table>
</form>
</div>
<!--<div class="col-md-9 ">
<form action="login.php" method="post">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
	
        <tr>
            <td></td>
            <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">Username</td>
            <td><input name="username" type="text" value="/*<?php echo $username; ?>*/"></td>
        </tr>
        <tr>
            <td align="right">Passwors</td>
            <td><input type="password" name="password"</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="login" class="Button3"<td>
        </tr>
    </table>
</form>
</div>
