<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с str_repeat</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: str_repeat</i><br>
		 <a href="http://php.net/manual/ru/function.str_repeat.php"> str_repeat</a>— Возвращает повторяющуюся строку<br>
        <h3>Завдання 1.</h3><br>
        <p>Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. 
		Решите задачу с помощью одного цикла и функции str_repeat.</p>
		<div class="example"> <br>
            <?php
				for($i=1; $i<6; $i++ ){
				echo str_repeat("x", $i). "<br>";
}
			?>
		</div>
		<div class="example"> Результат виполнения:<br>
            <?php
				for($i=1; $i<11; $i++ ){
				echo str_repeat("x", $i). "<br>";
}
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
        <p> Нарисуйте пирамиду, как показано на рисунке. 
		Решите задачу с помощью одного цикла и функции str_repeat.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'abcdefghijklmnopqrstuvwxyz'; ?></div>
		<div class="example"> <br>
            <?php
				for ($i = 1; $i <= 9; $i++) {
				echo str_repeat($i , $i).'<br>';
				}
			?>
		</div>
		<div class="example"> Результат виполнения:<br>
            <?php
				for ($i = 1; $i <= 9; $i++) {
				echo str_repeat($i , $i).'<br>';
				}
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				for ($i = 1; $i <= 9; $i++) {
				echo str_repeat($i , $i).'<br>';
				}<br>
			</div>
         </div>
        </div>
		
    </ul>
</div>
