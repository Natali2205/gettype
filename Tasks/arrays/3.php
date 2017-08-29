<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с in_array</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: in_array</i><br>
        <a href="http://php.net/manual/ru/function.in-array.php"> in_array</a>— Проверяет, присутствует ли в массиве значение.<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана массив<b><?php $arr=[1, 2, 3, 4, 5]; ?></b>. Проверте, что в нем есть элемент со значением 3.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr = [1, 2, 3, 4, 5];
				print_r(in_array(3, $arr));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				print_r(in_array(3, $arr));<br>
			</div>
        </div>
			 
     
    </ul>
</div>
