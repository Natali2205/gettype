<?php
session_start();
 

if(isset($_GET['logout'])){
	session_destroy();
}
function isLogin(){
	$dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
$dbname = "database"; // the name of the database that you are going to use for this project
$dbuser = "username"; // the username that you created, or were given, to access your database
$dbpass = "password"; // the password that you created, or were given, to access your database
 $connection=mysqli_connect("localhost", "root", "", "registration");
mysqli_connect("localhost", "root", "", "registration") or die("MySQL Error: " . mysqli_error());

if (isset($_SESSION['username'])){
	return true;
}
else{
	

if(!empty($_POST['username']) && !empty($_POST['password'])&& isset($_GET['login']))
{
    $username = $_POST['username'];
   // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
   $password = $_POST['password'];


    $result = mysqli_query($connection,"SELECT * FROM users WHERE username = '".$username."'");
    $checklogin=mysqli_fetch_array($result);
	print_r($checklogin);
    if($checklogin)
    {
      
         
        $_SESSION['username'] = $checklogin['username'];
      return true;
       
    }
   
}
}
return false;
}


