<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с str_shuffle</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: str_shuffle</i><br>
		 <a href="http://php.net/manual/ru/function.str_shuffle.php"> str_shuffle</a>—Переставляет символы в строке случайным образом<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка. Перемешайте символы этой строки в случайном порядке.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = '123456'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = '123456';
				echo str_shuffle($str);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = '123456';<br>
				echo str_shuffle($str);<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p>  Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись.
		Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'abcdefghijklmnopqrstuvwxyz'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = 'abcdefghijklmnopqrstuvwxyz';
				echo substr(str_shuffle($str), 0, 6);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = 'abcdefghijklmnopqrstuvwxyz';<br>
				echo substr(str_shuffle($str), 0, 6);<br>
			</div>
         </div>
        </div>
		
		
        </div>
    </ul>
</div>
