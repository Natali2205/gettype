<?php
session_start();
$page = 'login_form.php';

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBBASE) or die("MySQL Error: " . mysqli_error());
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if (isset($_GET['logout'])) {
    
    session_destroy();
    unset($_SESSION);
}

if (isset($_GET['register'])) {
    $page = 'register_form.php';
//	провірка чи існує юзер
$sql =  'SELECT * from users WHERE username = "'.$username.'"';
$res = mysqli_query($connection, $sql);
//$row = mysqli_num_rows($res); // Если занят, то придет '1', если свободен, то придет '0'
	if (empty($res)) {
	
		if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$query = "INSERT INTO users (username, email, password)
						  VALUES('$username', '$email', '$password')";
				$sel = mysqli_query($connection, $query);
			
				
			if ($sel) {
				$_SESSION['username'] = $username;
				$page = 'welcom.php';
			} else {
				 $errMSG = "Something went wrong, try again later..."; 
			}
		}
	} else{
	echo "This name is registered";
	}
	
}

if (isset($_GET['login'])) {
    $page = 'login_form.php';
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $password = $_POST['password'];
        $result = mysqli_query($connection, "SELECT * FROM users WHERE username = '" . $username . "'");
        if ($result) {
            $checklogin = mysqli_fetch_array($result);
            if ($checklogin) {
                $_SESSION['username'] = $checklogin['username'];
                if ($checklogin['admin'] == 1) {
                    $_SESSION['is_admin'] = true;
                }
                
                $page = 'welcom.php';
            }
        }  else if (empty($username) || empty( $password)) {
            $errors ='ERROR! Please enter your valid name or password';
        }
    } else if (empty($username) || empty( $password)) {
        $errors ='ERROR! Please enter your valid name or password';
    }
}


if (isset($_GET['users'])) {
    $page = 'users.php';
    $result = mysqli_query($connection, "SELECT * FROM users");
    $users = mysqli_fetch_all($result);
}

if (isset($_GET['user'])) {
    $page = 'users.php';
    $result = mysqli_query($connection, "SELECT * FROM users WHERE id=".$_GET['user']);
    $users = mysqli_fetch_array($result);
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