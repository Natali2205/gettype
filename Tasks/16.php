<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с chr и ord</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: chr и ord</i><br>
		 <a href="http://php.net/manual/ru/function.chr.php"> chr</a>— Возвращает символ по его коду.<br>
		 <a href="http://php.net/manual/ru/function.ord.php"> ord</a>—  Возвращает ASCII-код символа<br>
        <h3>Завдання 1.</h3><br>
        <p> Узнайте код символов <b> 'a', 'b', 'c', пробела</b></p>
       
		<div class="example"> Результат виполнения:<br>
            <?php
				echo ord('a'),'/', ord('b'),'/', ord('c'),'/', ord(' ');
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				echo ord('a'),'/', ord('b'),'/', ord('c'),'/', ord(' ');<br>
			</div>
        </div>
		
		<h3>Завдання 2.</h3><br>
        <p> Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.</b></p>
		<div class="example"> Результат виполнения:<br>
            <?php
				echo chr(33);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				echo chr(33);<br>
			</div>
        </div>
		
		<h3>Завдання 3.</h3><br>
        <p> Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: 
		с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.</b></p>
		<div class="example"> Результат виполнения:<br>
            <?php
				$str=rand(65, 90);
				echo chr($str);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$str=rand(65, 90);<br>
				echo chr($str);<br>
			</div>
        </div>
		<h3>Завдання 4.</h3><br>
        <p>  Запишите в переменную $str случайную строку $len длиной,
		состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.</b></p>
		<div class="example"> Результат виполнения:<br>
            <?php
				$len = rand(1,18);
			for ($i = 1; $i <= $len; $i++) {
				$str .=chr(rand(97,112));
			}
			echo $str;
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$len = rand(1,18);<br>
				for ($i = 1; $i <= $len; $i++) {<br>
				$str .=chr(rand(97,112));<br>
				}
				echo $str;<br>
			</div>
        </div>
		
	<h3>Завдання 5.</h3><br>
        <p> Дана буква английского алфавита. Узнайте, она маленькая или большая.</b></p>
		<div class="example"> Результат виполнения:<br>
            <?php
				$a="K";
				$str=ord($a);
				if($str>64&&$str<91){
					echo "Upper letter";
				}else if($str>96&&$str<123){
					echo "Lower letter";
				}else{
					echo "It's isn't a letter";
				}
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$a="K";<br>
				$str=ord($a);<br>
				if($str>64&&$str<91){<br>
					echo "Upper letter";<br>
				}else if($str>96&&$str<123){<br>
					echo "Lower letter";<br>
				}else{<br>
					echo "It's isn't a letter";<br>
				}<br>
			</div>
        </div>
        </div>
    </ul>
</div>
