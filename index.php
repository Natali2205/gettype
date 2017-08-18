<?php session_start();
require 'header.php';
if (isset($_GET['login'])) {
    if (isset($_POST['customer']) && !empty($_POST['customer'])) {
        echo "Yes, username is set";
    } else {
        echo "N0, username is not set";
    }
    require_once __DIR__ . '/login.php';
}
if (isset($_GET['logout'])) {
    unset($_SESSION);
}
 


?>
    <div>
        <?php
        if ($_SESSION["customer"] === 1) {
            echo "Welcome BilNil";
		
        } else if ($_SESSION["customer"] === 2) {
            echo "Welcome NilBil";
        } else {
            echo "Welkome ..";
        }
		
        ?>
    </div>
<?php
require 'menu.php';
if (isset($_GET['main'])) {
    require_once __DIR__ . '/content.php';
}
require 'content.php';
require 'footer.php';
