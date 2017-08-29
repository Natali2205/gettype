<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с count</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: count</i><br>
        <a href="http://php.net/manual/ru/function.count.php"> count </a>— Подсчитывает количество элементов массива или что-то в объекте<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана массив<b><?php $arr=[1, 2, 3, 4, 5]; ?></b>. Подсчитайте количество элементов этого массива.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr = [1, 2, 3, 4, 5];
				print_r(count($arr));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				print_r(count($arr));<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
         <p>Дана массив <b><?php $arr=[1, 2, 3, 4, 5]; ?></b>.  С помощью функции count выведите последний элемент данного массива.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
			$arr = [1, 2, 3, 4, 5];
			echo $arr[count($arr) - 1];
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				echo $arr[count($arr) - 1];<br>
			</div>
         </div>
     
    </ul>
</div>
