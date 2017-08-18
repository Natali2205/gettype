<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с strstr</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr</i><br>
		 <a href="http://php.net/manual/ru/function.strstr.php"> strstr</a> — Находит первое вхождение подстроки<br>
        <h3>Завдання 1.</h3><br>
        <p> Дана строка <b>'ab--cd--ef'</b>. С помощью функции <b>strstr<b> выведите на экран строку <b>'--cd--ef'.</b></p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $strl='ab--cd--ef'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$strl="12345";
				echo strrev($strl);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$strl="12345";<br>
				echo strrev($strl);<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p> Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str5="madam"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str5="madam";
				$str0=strrev($str5);
				if($str5==$str0){
					echo "yes";
				} else {
					echo 'no';
				}
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str5="madam";<br>
				$str0=strrev($str5);<br>
				if($str5==$str0){<br>
					echo "yes";<br>
				} else {<br>
					echo 'no';<br>
				}<br>
			</div>
         </div>
        </div>
		
		
        </div>
    </ul>
</div>
