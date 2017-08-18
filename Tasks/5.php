<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с strtr</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strtr</i><br>
        <a href="http://php.net/manual/ru/function.strstr.php"> strtr</a>— Находит первое вхождение подстроки<br>
        <h3>Завдання 1.</h3><br>
        Дана строка <b>$str</b>. Замените в ней все буквы 'a' на цыфру 1, буквы 'b'-на 2, а буквы 'c'-на 3. Решыте задачу двумя способами роботы с функцией<b>strtr</b>.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = "akbcdef"; ?></div>
        <div class="example"> Результат виконання первого способа:<br>
            <?php
               echo strtr("akbcdef", "abc", 123),"\n";
			   ?>
        </div>
		<div class="example"> Результат виконання второго способа(масив замен):<br>
            <?php
      $some_str=array(
          'a'=>1,
          'b'=>2,
          'c'=>3);
          echo strtr("ghfhajblc",$some_str); ?>
        </div>
        <div class="example">
            <h3>Код PHP (первый способ)</h3>
            <div class="rezult">
               echo strtr("akbcdef", "abc", 123);<br>
        </div>
		<h3>Код PHP (второй способ)</h3>
            <div class="rezult">
                $some_str=array(<br>
          'a'=>1,<br>
          'b'=>2,<br>
          'c'=>3);<br>
          echo strtr("ghfhajblc",$some_str); ?>
        </div>
            </div>
        </div>

        


    </ul>
</div>
