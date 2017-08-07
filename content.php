<div class="col-md-9 ">
    <div class="container">
        <p>MAIN</p>
        <?php
        $pages = array('1', '2', '3', '4', '5', '6', '7', '8','9');
        if (isset($_GET['task'])) {
            if (in_array($_GET['task'], $pages)) {
                require_once __DIR__ . '/Tasks/' . $_GET['task'] . '.php';
            }
        }
        if (isset($_GET['log'])) {
            require_once __DIR__ . '/login.php';
        }

        ?>
    </div>
</div>
</div>
</div>