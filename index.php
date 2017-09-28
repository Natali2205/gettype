<?php 
include 'config.php';
include 'base.php'; 
require 'header.php';
include($page);
if($_SESSION['admin'] == '' OR $_SESSION['user']['usertype'] == 2) { 
// for normal user and admin
require 'menu.php';
require 'content.php';
} if($_SESSION['admin'] == 2) { 
// DO Stuff for admin only
require 'admin.php';	  
}
require 'footer.php';
