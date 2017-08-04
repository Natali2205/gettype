<?php session_start(); ?>
<?php include "header.php"; ?>

    <div>
        <?php
        if ($_SESSION["customer"] === 1) {
            echo "Welcome 1";
        } else if ($_SESSION["customer"] === 2) {
            echo "Welcome 2";
        } else {
            echo "Welkome ..";
        }
        ?>
    </div>


<?php session_commit(); ?>