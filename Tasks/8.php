<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с explode, implode</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: explode, implode</i><br>
        <a href="http://php.net/manual/ru/function.explode.php"> explode</a>— Разбивает строку с помощью разделителя<br>
		 <a href="http://php.net/manual/ru/function.implode.php">implode</a>—  Объединяет элементы массива в строку<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка <b><?php $str='html css php'; ?></b>С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'html css php'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str  = 'html css php';
				$pieces = explode(" ", $str);
				 var_dump($pieces);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str  = 'html css php';<br>
				$pieces = explode(" ", $str);<br>
				 var_dump($pieces);<br>
			</div>
        </div>
			 <h3>Завдання 2.</h3><br>
        <p>Дан массив с элементами <b>'html', 'css', 'php'; </b> С помощью функции implode создайте строку из этих элементов, разделенных запятыми.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr= array('html', 'css', 'php'); ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$array = array('html', 'css', 'php');
				echo "Завдання 2 (explode, implode)";
				echo implode(",", $array);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$array = array('html', 'css', 'php');<br>
				echo "Завдання 2 (explode, implode)";<br>
				echo implode(",", $array);<br>
			</div>
         </div>
        </div>

			 <h3>Завдання 3.</h3><br>
        <p>В переменной $date лежит дата в формате<b>'2013-12-31'</b> Преобразуйте эту дату в формат '31.12.2013'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr= '2013-12-31'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$words  = '2013-12-31';
				$pieces = explode("-", $words);
				echo implode(".", array($pieces[2], $pieces[1], $pieces[0]));
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$words  = '2013-12-31';<br>
				$pieces = explode("-", $words);<br>
				echo implode(".", array($pieces[2], $pieces[1], $pieces[0]));<br>
			</div>
         </div>
        </div>
    </ul>
</div>
