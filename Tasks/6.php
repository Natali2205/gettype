<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа с substr_replace</h3></strong><br>
        <i>Для решения задач данного блока вам понадобятся следующие функции: substr_replace</i><br>
        <a href="юю"> substr_replace</a>— юююю<br>
        <h3>Завдання 1.</h3><br>
        <p>Дана строка <b>$str</b>. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставте "!!!".</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = "php"; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
     echo substr_replace("akbcdeff","!!!",2);
	 ?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
            echo substr_replace("akbcdeff","!!!",2);<br>
        </div>
            </div>
        </div>
    </ul>
</div>
