<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
    <strong><h3>Работа с strlen</h3></strong><br>
    <i>Для вирішення задач данного блоку вам потрібні наступні функції: strlen.</i><br>
 <a href="http://php.net/manual/ru/function.strlen.php">strlen </a> — Повертає довжину рядка<br>
    
    <h3>Завдання 1.</h3><br>
 Дана строка <b>'html css php'</b>. Знайдіть кількість символів у цьому рядку.
<div class="example"> Початковий вигляд (якщо він існує):<br>html css php</div>
<div class="example"> Результат виконання:<br>(число)</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
          $d='html css php';<br>
  echo strlen($d);
    </div>
    </div>
  
    <h3>Завдання 2.</h3> Дана змінна $password, в якій зберігається пароль користувача. Якщо кількість символів пароля більше 5-ти і менше 10-ти, то виведіть користувачy повідомлення про те, що пароль підходить, інакше повідомлення про те, що потрібно придумати інший пароль</b>.<br>
<div class="example"> Початковий вигляд (якщо він існує):<br>$password</div>
<div class="example"> Результат виконання:<br>(text or password)</div>
<div class="example">
        <h3>Код PHP</h3>
    <div class="rezult">
      $password='1234';<br>
 $passlen=strlen($password);<br>
 if($passlen>5 &&  $passlen <10){<br>
  echo $password;<br>
 } else {<br>
 echo "Невірна кількість символів, придумайте новий";<br>
 }
    </div>
    </div>
        
    </ul>
</div>

