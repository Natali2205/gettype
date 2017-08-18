<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с str_split</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: str_split</i><br>
        <a href="http://php.net/manual/ru/function.str-split.php"> str_split</a> — Преобразует строку в массив<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка <b>'1234567890'</b>Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = "1234567890"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = "1234567890";
				$arr1 = str_split($str, 2);
				print_r($arr1);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = "1234567890";<br>
				$arr1 = str_split($str, 2);<br>
				print_r($arr1);<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p>Дана строка <b>'1234567890'.</b> Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = "1234567890"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = "1234567890";
				$arr2= str_split($str);
				print_r ($arr2);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = "1234567890";<br>
				$arr2= str_split($str);<br>
				print_r ($arr2);<br>
			</div>
         </div>
        </div>
		
			 <h3>Завдання 3.</h3><br>
        <p>Дана строка <b>'1234567890'.</b> Сделайте из нее строку <b>'12-34-56-78-90'</b> не используя цикл</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php 	$str = "1234567890"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str = "1234567890";
				$arr2= str_split($str, 2);
				echo implode("-", $arr2);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str = "1234567890";<br>
				$arr2= str_split($str, 2);<br>
				echo implode("-", $arr2);<br>
			</div>
         </div>
        </div>
    </ul>
</div>
