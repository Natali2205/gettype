<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с strip_tags и htmlspecialchars</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strip_tags и htmlspecialchars</i><br>
		 <a href="http://php.net/manual/ru/function.strip_tags.php">strip_tags</a>— Удаляет HTML и PHP-теги из строки<br>
        <a href="http://php.net/manual/ru/function.htmlspecialchars.php">htmlspecialchars</a>—  Преобразует специальные символы в HTML-сущности<br>
		<h3>Завдання 1.</h3><br>
        <p> Дана строка <b>'html, <b>php</b>, js'<b>. Удалите теги из этой строки. </p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str='html,<b>php</b>,js</p>'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str='html,<b>php</b>,js';
				echo strip_tags($str,'<b></b>');
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str='html,<b>php</b>,js';<br>
				echo strip_tags($str,'<b></b>');<br>
			</div>
        </div>
		
		<h3>Завдання 2.</h3><br>
        <p>  Дана строка <b>$str<b>. Удалите все теги из этой строки, кроме тегов "<b>"и "<i>". </p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str='html,<b>php</b>,js<i>'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				echo strip_tags($str, '<b><i>');
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				echo strip_tags($str, '<b><i>');<br>
			</div>
        </div>
		
		<h3>Завдання 3.</h3><br>
        <p> Дана строка <b>'html, <b>php</b>, js'. </b>
		Выведите ее на экран <b>'как есть'</b>: то есть браузер не должен преобразовать <b> в жирный </p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str='html,<b>php</b>,js<i>'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str='html,<b>php</b>,js</p>';
				echo htmlspecialchars($str);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str='html,<b>php</b>,js</p>';<br>
				echo htmlspecialchars($str);<br>
			</div>
        </div>
		
        </div>
    </ul>
</div>
