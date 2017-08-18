<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с number_format</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: number_format</i><br>
		 <a href="http://php.net/manual/ru/function.number_format.php"> number_format</a>— Форматирует число с разделением групп.<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка. Перемешайте символы этой строки в случайном порядке.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str="12345678"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str="12345678";
				echo number_format($str, null, null, " ");
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str="12345678";<br>
				echo number_format($str, null, null, " ");<br>
			</div>
        </div>
		
        </div>
    </ul>
</div>
