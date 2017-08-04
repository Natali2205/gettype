<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с регистром символов</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: strtolower, strtoupper, ucfirst, lcfirst,
            ucwords.</i><br>
        <a href="http://php.net/manual/ru/function.strtolower.php">strtolower </a>— Преобразует строку в нижний
        регистр<br>
        <a href="http://php.net/manual/ru/function.strtoupper.php">strtoupper</a> — Преобразует строку в верхний регистр<br>
        <a href="http://php.net/manual/ru/function.ucfirst.php">ucfirst</a> — Преобразует первый символ строки в верхний
        регистр<br>
        <a href="http://php.net/manual/ru/function.lcfirst.php">lcfirst</a> — Преобразует первый символ строки в нижний
        регистр<br>
        <a href="http://php.net/manual/ru/function.ucwords.php">ucwords</a>— Преобразует в верхний регистр первый символ
        каждого слова в строке<br>
        <h3>Завдання 1.</h3><br>
        Дана строка <b>'php'</b>. Сделайте из нее строку <b>'PHP'</b>.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $f = "php"; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $f = "php";
            $rez1 = strtoupper($f);
            echo "$rez1"; ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $f="php";<br>
                $rez1=strtoupper($f);<br>
                echo $rez1;<br>
            </div>
        </div>

        <h3>Завдання 2.</h3><br> Дана строка <b>'PHP'</b>. Сделайте из нее строку <b>'php'</b>.<br>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $c = 'PHP'; ?> </div>
        <div class="example"> Результат виконання:<br>
            <?php
            $c = 'PHP';
            $rezc = strtolower($c);
            echo $rezc;
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $c='PHP';<br>
                $rezc=strtolower($c);<br>
                echo $rezc;<br>
            </div>
        </div>

        <h3>Завдання 3.</h3><br>Дана строка <b>'london'</b>. Зробіть з неї строку <b>'London'</b>.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $b; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $b = "london";
            $rez = ucfirst($b);
            echo $rez;
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $b="london";<br>
                $rez=ucfirst($b;<br>
                echo $rez;
            </div>
        </div>

        <h3>Завдання 4.</h3><br> Дана строка <b>'London'</b>. Сделайте из нее строку <b>'london'.</b><br>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $b4; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $b = "London";
            echo lcfirst($b);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $b="London";<br>
                echo lcfirst($b);<br>
            </div>
        </div>

        <h3>Завдання 5.</h3> Дана строка <b>'london is the capital of great britain'</b>. Сделайте из нее строку <b>'London
            Is The Capital Of Great Britain'.</b>. <br>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $d; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $d = 'london is the capital of great britain';
            echo ucwords($d);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $d='london is the capital of great britain';<br>
                echo ucwords($d);<br>
            </div>
        </div>

        <h3>Завдання 6.</h3> Дана строка <b>'LONDON'</b>. Сделайте из нее строку <b>'London'.</b>.

        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $a; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $a = 'LONDON';
            $a2 = strtolower($a);
            echo ucfirst($a2);
            ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
                $a='LONDON';<br>
                $a2=strtolower($a);<br>
                echo ucfirst($a2);
            </div>
        </div>

        <b>Завдання 7.</b> Дана строка <b>'Лондон'. Зробити з неї <b>'ЛОНДОН'.</b>


    </ul>
</div>
