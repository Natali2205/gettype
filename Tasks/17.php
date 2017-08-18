<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с strchr, strrchr</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr</i><br>
		 <a href="http://php.net/manual/ru/function.strchr.php"> strchr</a>— Псевдоним strstr()<br>
		  <a href="http://php.net/manual/ru/function.strrchr.php"> strrchr</a>— Находит последнее вхождение символа в строке<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка <b>'ab-cd-ef'</b>. С помощью функции strchr выведите на экран строку <b>'-cd-ef'.</b>/p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str='ab-cd-ef'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str='ab-cd-ef';
				echo strstr($str,'-');
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str='ab-cd-ef';<br>
				echo strstr($str,'-');<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p> Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str5="madam"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str='ab-cd-ef';
				echo strrchr($str,'-');
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str='ab-cd-ef';<br>
				echo strrchr($str,'-');<br>
			
			</div>
         </div>
        </div>
		
		
        </div>
    </ul>
</div>
