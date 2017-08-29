<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с array_sum, array_product</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: array_sum, array_product</i><br>
        <a href="http://php.net/manual/ru/function.array_sum .php"> array_sum </a>—  Вычисляет сумму значений массива.<br>
		<a href="http://php.net/manual/ru/function.array_product.php"> array_product </a>— Вычислить произведение значений массива.<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана массив<b><?php $arr=[1, 2, 3, 4, 5]; ?></b>.Найдите сумму элементов этого массива.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr = [1, 2, 3, 4, 5];
				print_r(array_sum($arr));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				print_r(array_sum($arr));<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
         <p>Дана массив <b><?php $arr=[1, 2, 3, 4, 5]; ?></b>. Найдите произведение (умножение) элементов этого массива</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
			$arr = [1, 2, 3, 4, 5];
			print_r(array_product($arr));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				print_r(array_product($arr));<br>
			</div>
         </div>
		 
		  <h3>Завдання 3.</h3><br>
         <p>Дана массив <b> $arr</b>. С помощью функции array_sum и count найдите среднее арифметическое элементов (сумма элементов делить на их количество) данного массива.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr = [1, 2, 3, 4, 5]; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
			$arr = [1, 2, 3, 4, 5];
			print_r(array_sum($arr) / count($arr));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = [1, 2, 3, 4, 5];<br>
				print_r(array_sum($arr) / count($arr));<br>
			</div>
         </div>
     
    </ul>
</div>
