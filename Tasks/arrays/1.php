<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Задача №1</h3></strong><br>
       
        <h3>Завдання 1.</h3><br>
        <p>Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет, мир!'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'html css php'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr = ['Привет,', 'мир', '!'];
				print_r($arr[0] . $arr[1] . $arr[2]);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = ['Привет,', 'мир', '!'];<br>
				print_r($arr[0] . $arr[1] . $arr[2]);<br>
			</div>
        </div>
		
		<strong><h3>Задача №2</h3></strong><br>
			 <h3>Завдання 2.</h3><br>
        <p> Дан массив ['Привет, ', 'мир', '!']. Необходимо записать в первый элемент (то есть элемент с номером ноль) этого массива слово 'Пока, ' (то есть вместо слова 'Привет, ' будет 'Пока, ').</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr= array('html', 'css', 'php'); ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr = ['Привет,', 'мир', '!'];
				$arr[0] = 'Пока, ';
				print_r($arr[0] . $arr[1] . $arr[2]);
			?>
        </div>
        <div class="example">
            <h3>Код PHP</h3>
            <div class="rezult">
				$arr = ['Привет,', 'мир', '!'];<br>
				$arr[0] = 'Пока, ';<br>
				print_r($arr[0] . $arr[1] . $arr[2]);<br>
			</div>
         </div>
        </div>

			 <h3>Завдання 3.</h3><br>
        <p>В переменной $date лежит дата в формате<b>'2013-12-31'</b> Преобразуйте эту дату в формат '31.12.2013'.</p>
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php $arr= '2013-12-31'; ?></div>
		<div class="example"> Результат виполнения:<br>
            <?php
				$arr1 = [1, 2, 3, 4, 5];
				print_r($arr1);
			?>
        </div>
        <div class="example">
            <h3>Код PHP (первый способ)</h3>
            <div class="rezult">
				
				$arr1 = [1, 2, 3, 4, 5];<br>
				print_r($arr1);<br>
			</div>
         </div>
		 
		 <div class="example">
            <h3>Код PHP (второй способ)</h3>
            <div class="rezult">
		
				$arr2[]=1;<br>
				$arr2[]=2;<br>
				$arr2[]=3;<br>
				$arr2[]=4;<br>
				$arr2[]=5;<br>
				print_r($arr2);<br>
			</div>
         </div>
		 
		         <div class="example">
            <h3>Код PHP (третий способ) </h3>
            <div class="rezult">
		
				$arr3=[];<br>
				array_push($arr3,1,2,3,4,5);<br>
				print_r($arr3);<br>
			</div>
        
    </ul>
</div>
