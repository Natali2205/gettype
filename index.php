<?php require 'header.php';

if (isset($_GET['log'])) {
    require_once __DIR__ . '/login.php';
}

require 'menu.php';
require 'content.php';

require 'footer.php';
