<?php
session_start();


if (isset($_GET['logout'])) {
    session_destroy();
    header("location:index.php");
}
function isLogin()
{
    $dbhost = "localhost";
    $dbname = "database";
    $dbuser = "username";
    $dbpass = "password";
    $connection = mysqli_connect("localhost", "root", "", "registration");
    mysqli_connect("localhost", "root", "", "registration") or die("MySQL Error: " . mysqli_error());

    if (isset($_SESSION['username'])) {
        return true;
    } else {


        if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_GET['login'])) {
            $username = $_POST['username'];
            // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $password = $_POST['password'];


            $result = mysqli_query($connection, "SELECT * FROM users WHERE username = '" . $username . "'");
            $checklogin = mysqli_fetch_array($result);
            //print_r($checklogin);
            if ($checklogin) {


                $_SESSION['username'] = $checklogin['username'];
                return true;

            }

        }
    }
    return false;
}

function loginAfterRegister()
{
    if (!empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['email']))) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $connection = mysqli_connect("localhost", "root", "", "registration");
        mysqli_connect("localhost", "root", "", "registration") or die("MySQL Error: " . mysqli_error());
    }
    if (empty($email) || empty($password)) {
        $errors[] = 'Please enter your valid email and password';
    } else {
        $query = "INSERT INTO users (username, email, password)
				  VALUES('$username', '$email', '$password')";
        $sel = mysqli_query($connection, $query);
        if ($sel) {

            if (null !== $_SESSION['username']) {
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }


            return true;
        }
        return false;
    }
}




