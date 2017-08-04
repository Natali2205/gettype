<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с регистром символов</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: str_replace </i><br>
        <a href="http://php.net/manual/ru/function.str-replace.php">str_replace </a>- Замінює всі входження строки
        пошуку на строку заміни<br>
        <h3>Завдання 1.</h3><br>
        Дана строка <b>'31 .12.2013 '</b>. Замінити всі точки на дефіси. <b>'PHP'</b>.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = '31.12.2013'; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $str = '31.12.2013';
            echo str_replace(".", "-", $str);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $str='31.12.2013';<br>
                echo str_replace(".","-",$str);<br>
            </div>
        </div>

        <h3>Завдання 2.</h3><br> 
		Дана строка <b>$ str</b>. Замініть в ньому всі букви 'a' на цифру 1, букви 'b' - на 2,
        а букв 'c' - на 3.<br>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = "somabjc"; ?> </div>
        <div class="example"> Результат виконання:<br>
            <?php
            $str = "somabjc";
            echo str_replace(array("a", "b", "c"),
                array(1, 2, 3), $str);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $str="somabjc";<br>
                echo str_replace(array("a","b","c"),
                array(1,2,3),$str);<br>
            </div>
        </div>
         
        <h3>Завдання 3.</h3><br>Дана рядок із буквами та цифрами, наприклад,<b>'1a2b3c4b5d6e7f8g9h0' </b>. Видаліть з
        неї всі цифри.
        Тож у нашому випадку має з'явитися рядок <b>'abcbdefgh'</b>.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $str = '1a2b3c4b5d6e7f8h0'; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $str = '1a2b3c4b5d6e7f8h0';
            echo preg_replace('/[0-9]/', '', $str);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $str='1a2b3c4b5d6e7f8h0';<br>
                echo preg_replace('/[0-9]/','',$str);<br>
            </div>
        </div>


    </ul>
</div>
