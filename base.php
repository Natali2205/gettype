<?php
session_start();
$page = 'login_form.php';
/*if(isLogin()){
	$page='welcom.php';
}
else{
	$page='login_form.php';
}*/

$dbhost = "localhost";
$dbname = "database";
$dbuser = "username";
$dbpass = "password";
$connection = mysqli_connect("localhost", "root", "", "registration");
mysqli_connect("localhost", "root", "", "registration") or die("MySQL Error: " . mysqli_error());


if (isset($_GET['logout'])) {
    session_destroy();

}
if (isset($_GET['register'])) {
    $page = 'register_form.php';
    
      
		if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $query = "INSERT INTO users (username, email, password)
					  VALUES('$username', '$email', '$password')";
            $sel = mysqli_query($connection, $query);
		}
		 if ($sel) {
                $_SESSION['username'] = $username;
                $page = 'welcom.php';
            }else {
             $errMSG = "Something went wrong, try again later..."; 
			} 
		 if (empty($username) || empty( $password) || empty($email)) {
            $error ='ERROR! Please enter your valid name, email and password';
			$page = 'register_form.php';
    }
		
}

if (isset($_GET['login'])) {
    $page = 'login_form.php';
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $password = $_POST['password'];
		$result = mysqli_query($connection, "SELECT * FROM users WHERE username = '" . $username . "'");
        $checklogin = mysqli_fetch_array($result);
        //print_r($checklogin);
        if ($checklogin) {
			$_SESSION['username'] = $checklogin['username'];
            $page = 'welcom.php';
		}  
	} else if (empty($username) || empty( $password)) {
		$errors ='ERROR! Please enter your valid name or password';
	    $page = 'login_form.php';
	}

}


if (isset($_GET['users'])) {
    $page = 'users.php';
    $result = mysqli_query($connection, "SELECT * FROM users ");
    $USER = mysqli_fetch_array($result);
}

function isLogin()
{
    if (isset($_SESSION['username'])) {
        //$page='welcom.php';
        return true;
    } else {
        return false;
	}

}