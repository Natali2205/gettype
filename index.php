<?php 
include 'config.php';
include 'base.php';
require 'header.php';
include($page);
//if(isset($_SESSION['user']) && isset($_SESSION['user']['usertype']) && $_SESSION['user']['usertype']== 2) { 
if($page='welcom' && isset($_SESSION['username']) && isset($_SESSION['userId'])) { 
    // for normal user and admin
    require 'menu.php';
    require 'content.php';
} 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 2) { 
    // DO Stuff for admin only
    require 'admin.php';	  
}
require 'footer.php';
