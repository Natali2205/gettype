<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с trim, ltrim, rtrim</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: trim, ltrim, rtrim</i><br>
		 <a href="http://php.net/manual/ru/function.trim.php"> trim </a>— Удаляет пробелы (или другие символы) из начала и конца строки<br>
        <a href="http://php.net/manual/ru/function.ltrim.php"> ltrim </a>— Удаляет пробелы (или другие символы) из начала строки<br>
		 <a href="http://php.net/manual/ru/function.rtrim.php"> ltrim </a>— Удаляет пробельные (или другие символы) из конца строки<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка. Очистите ее от концевых пробелов.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = ' coding '; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = ' coding ';
				echo trim($str);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = ' coding ';<br>
				echo trim($str);<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p>Дана строка <b>'/php/'.</b>  Сделайте из нее строку <b>'php'</b>, удалив концевые слеши</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str3="/php/"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str3="/php/";
				$trimmed = trim($str3, "/");
				var_dump($trimmed);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str3="/php/";<br>
				$trimmed = trim($str3, "/");<br>
				var_dump($trimmed);<br>
			</div>
         </div>
		
			 <h3>Завдання 3.</h3><br>
        <p>Дана строка <b>'слова слова слова.'.</b> В конце этой строки может быть точка, а может и не быть.
		Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php 	$str = "1234567890"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str3="строка строка строка.";
				$tr = rtrim($str3,  ".");
				var_dump ($tr.".");
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str3="строка строка строка.";<br>
				$tr = rtrim($str3,  ".");<br>
				var_dump ($tr.".");<br>
			</div>
         </div>

    </ul>
</div>
