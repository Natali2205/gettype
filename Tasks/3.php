<div>
    <ul>
    <strong><h3>Работа з substr </h3></strong><br>
    <i>Для вирішення задач данного блоку вам потрібні наступні функції: strlen.</i><br>
 <a href="http://php.net/manual/ru/function.substr.php"> substr </a> - Повертає підрядок<br>
   <h3>Завдання 1.</h3><br>
 Дана строка <b>'html css php'</b>. Виріжте з неї і виведіть на екран слово 'html', слово 'css' та слово 'php'.
<div class="example"> Початковий вигляд (якщо він існує):<br>html css php</div>
<div class="example"> Результат виконання:<br>'php', 'css', 'html'.</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
        function finder ($strof){<br>
  $o="html css php";<br>
  $ht=strpos($o, $strof);<br>
  $htl=strlen($strof);<br>
  echo substr($o, $ht, $htl); <br>
  }<br>
       echo "'",finder("php"),"',";<br>
       echo "'",finder("css"),"',";<br>
       echo "'",finder("html"),".";
    </div>
    </div>
 <h3>Завдання 2.</h3><br>
 Дана строка. Виведіть і виведіть на екрані останні 3 символи цього рядка.
<div class="example"> Початковий вигляд (якщо він існує):<br>(строка)</div>
<div class="example"> Результат виконання:<br>(останні 3 символи)</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
       $r="Ukranian";<br>
   $m=strrev($r);<br>
   $rr=substr ($m,0,3);<br>
   echo strrev($rr);
    </div>
    </div>
        
        <h3>Завдання 3.</h3><br>
 Дана строка. Перевірте, що вона починається на<b> "http: //". .<b> Виведіть і виведіть на екрані останні 3 символи цього рядка.
<div class="example"> Початковий вигляд (якщо він існує):<br>(строка)</div>
<div class="example"> Результат виконання:<br>Yes or No</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
    $str = 'http://somestring';<br>
	if (substr($str, 0, 7) == 'http://') {<br>
		echo 'Yes';<br>
	} else {<br>
		echo 'No';<br>
	}
    </div>
    </div>
        <h3>Завдання 4.</h3><br>
Дана строка. Перевірте, що вона починається на<b> 'http: // '</b>або на<b>' https: // '</b>. Виведіть і виведіть на екрані останні 3 символи цього рядка.
<div class="example"> Початковий вигляд (якщо він існує):<br>(строка)</div>
<div class="example"> Результат виконання:<br>Yes or No</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
   $k1='http://..';<br>
 $k2='https://..';<br>
 $some_str='http://epam.com';<br>
 $e= substr($k1, 0,7);<br>
 $m= substr($k2, 0,7);<br>
 if(substr($some_str, 0,7)==$m){<br>
     echo "Yes"; <br>
 }else if( substr($some_str, 0,7)==$e){ <br>
    echo "Yes";<br>
 }else{<br>
      echo "No";<br>
 }
    </div>
    </div>

 Дана строка. Перевірте, що вона закінчується на '.png'. Если это так, выведите 'да', якщо не так - 'нет'. Показати рішення.

 Дана строка. Перевірте, чи вона закінчується на '.png' або на '.jpg'. Если это так, выведите 'да', якщо не так - 'нет'. Показати рішення.

 Дана строка. Якщо в цьому рядку більше 5-ти символів - виведіть з нього перші 5 символів, додайте троєточки в кінець і виведіть на екран. Якщо в цьому рядку 5 і менше символів - просто виведіть цей рядок на екран. Показати рішення.