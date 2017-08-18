<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с substr_replace</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos</i><br>
        <a href="http://php.net/manual/ru/function.strpos.php">strpos</a>— Возвращает позицию первого вхождения подстроки.<br>
		<a href="http://php.net/manual/ru/function.strrpos.php"> strrpos</a>— Возвращает позицию последнего вхождения подстроки в строке<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка <b>'abc abc abc'</b>. Определите позицию первой буквы 'b'</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'abc abc abc'; ?></div>
        <div class="example"> Результат виконання первого способа:<br>
            <?php
               $str="abc abc abc";
				echo strpos($str, "b"),"\n";
			   ?>
        </div>
		
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str="abc abc abc";<br>
				echo strpos($str, "b"),"\n";
        </div>
            </div>
			<h3>Завдання 2.</h3><br>
        <p>Дана строка <b>'abc abc abc'</b>. Определите позицию последней буквы 'b'</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'abc abc abc'; ?></div>
        <div class="example"> Результат виконання первого способа:<br>
            <?php
               $str="abc abc abc";
				echo strrpos($str, "b"),"\n";
			   ?>
        </div>
		
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
           $str="abc abc abc";<br>
			echo strrpos($str, "b"),"\n";
        </div>
            </div>
			<h3>Завдання 3.</h3><br>
        <p>Дана строка <b>'abc abc abc'</b>. Определите позицию первой найденной буквы 'b', если начать поискне с начала строки, а с позиции 3.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'abc abc abc'; ?></div>
        <div class="example"> Результат виконання первого способа:<br>
            <?php
               $str="abc abc abc";
				echo strpos($str, "b",2),"\n";
			   ?>
        </div>
		
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
           $str="abc abc abc";<br>
			echo strpos($str, "b",2),"\n";
        </div>
            </div>
			 <h3>Завдання 4.</h3><br>
        <p>Дана строка <b>'aаа aаа aаа ааа ааа'</b>. Определите позицию второго пробела</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'aаа aаа aаа ааа ааа'; ?></div>
        <div class="example"> Результат виконання первого способа:<br>
            <?php
              $str='aаа aаа aаа ааа ааа';
				echo strpos($str, "b",2),"\n";
			   ?>
        </div>
		
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
			$str='aаа aаа aаа ааа ааа';<br>
			echo strpos($str, "b",2),"\n";
        </div>
            </div>
			
        </div>
    </ul>
</div>
