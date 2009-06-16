
<div class="col-md-9 ">
	<div class="jumbotron">
	<h1>Вчимо PHP!</h1>
	</div>
    <div class="container">
        <?php
        $pages = array('1', '2', '3', '4', '5', '6', '7', '8','9','10','11','12','13','14','15','16','17','18');
        if (isset($_GET['task'])) {
            if (in_array($_GET['task'], $pages)) {
                require_once __DIR__ . '/Tasks/' . $_GET['task'] . '.php';
            }
        }


        ?>
    </div>
	
</div>
</div>
</div>