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

<style>
    .rezult {
   /* border-left: 6px solid green;
    background-color: lightgrey;*/
        width: auto;
    background-color: #fff;
    padding: 8px 12px 10px 10px;
    border-left: 4px solid #4CAF50;
    word-wrap: break-word;
    margin-bottom: auto;
    display: block;
        
    }
     .ex{
         border: 2px;
       background-color: grey;  
                            }
    .example {
            display: block;
        box-sizing: inherit;
    background-color: #f1f1f1;
    padding: 0.01em 16px;
    margin: 20px 0;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
}

</style>