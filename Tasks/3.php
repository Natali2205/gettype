<link href="css/styletasks.css" rel="stylesheet">
<div>
    <ul>
        <strong><h3>Работа з substr </h3></strong><br>
        <i>Для вирішення задач данного блоку вам потрібні наступні функції: strlen.</i><br>
        <a href="http://php.net/manual/ru/function.substr.php"> substr </a> - Повертає підрядок<br>
        <h3>Завдання 1.</h3><br>
        Дана строка <b>'html css php'</b>. Виріжте з неї і виведіть на екран слово 'html', слово 'css' та слово 'php'.
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $f = "html css php"; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            function finder($strof)
            {
                $o = "html css php";
                $ht = strpos($o, $strof);
                $htl = strlen($strof);
                echo substr($o, $ht, $htl);
            }
			echo "'", finder("php"), "',";
            echo "'", finder("css"), "',";
            echo "'", finder("html"), "'.";
            echo '<hr>';
            ?>
        </div>
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
        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $f = "Ukranian"; ?></div>
        <div class="example"> Результат виконання:<br>
            <?php
            $r = "Ukranian";
            $m = strrev($r);
            $rr = substr($m, 0, 3);
                echo strrev($rr);
				?>
        </div>
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
        Дана строка. Перевірте, що вона починається на<b> "http: //". .<b> Виведіть і виведіть на екрані останні 3
                символи цього рядка.
                <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'http://somestring'; ?>
                </div>
                <div class="example"> Результат виконання:<br>
                    <?php
                    $r = "Ukranian";
                    $m = strrev($r);
                    $rr = substr($m, 0, 3);
                    echo strrev($rr);
                    echo '<hr>';
                    ?>

                </div>
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
                Дана строка. Перевірте, що вона починається на<b> 'http: // '</b>або на<b>' https: // '</b>. Виведіть і
                виведіть на екрані останні 3 символи цього рядка.
                <div class="example"> Початковий вигляд (якщо він існує):<br>$str)</div>
                <div class="example"> Результат виконання:<br><?php
                    $k1 = 'http://..';
                    $k2 = 'https://..';
                    $some_str = 'http://epam.com';
                    $e = substr($k1, 0, 7);
                    $m = substr($k2, 0, 7);

                    if (substr($some_str, 0, 7) == $m) {
                        echo "Yes";
                    } else if (substr($some_str, 0, 7) == $e) {
                        echo "Yes";
                    } else {
                        echo "No";
                    }
                    ?></div>
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

                <h3>Завдання 5.</h3> Дана строка <b>Перевірте, що вона закінчується на <b>'.png'.</b>. Якщо це так, то
                    виведіть 'так', якщо не так -
                    'ні'.<br>
                    <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'image.png'; ?></div>
                    <div class="example"> Результат виконання:<br>
                        <?php
                        $str = 'image.png';
                        $check = substr($str, -4);
                        if ($check == '.png') {
                            echo 'Yes!';
                        } else {
                            echo 'Sorry, but No!';
                        }
                        ?>
                    </div>
                    <div class="example">
                        <h3>Код PHP</h3>
                        <div class="rezult">

                            $str = 'image.png';<br>
                            $check = substr($str, -4);<br>
                            if ($check == '.png') {<br>
                            echo 'Yes!';<br>
                            } else {<br>
                            echo 'Sorry, but No!';
                            }
                        </div>
                    </div>

                    <h3>Завдання 6.</h3> Дана строка <b>Перевірте, що вона закінчується на
                        <b>'.png'.</b>або<b>'.jpg'.</b>. Якщо це так, то виведіть 'так', якщо не так -
                        'ні'.<br>

                        <div class="example"> Початковий вигляд (якщо він існує):<br><?php echo $str = 'image.jpg'; ?>
                        </div>
                        <div class="example"> Результат виконання:<br>
                            <?php
                            $str = 'mokochoko.png';
                            $n_s_rev = substr($str, -4);
                            if ($n_s_rev == ".png") {
                                echo "Yes!";
                            } else if ($n_s_rev ===".jpg") {
                                echo "Great, Yes!";
                            } else {
                                echo "Sorry, but No!";
                            }
                            ?>
                        </div>
                        <div class="example">
                            <h3>Код PHP</h3>
                            <div class="rezult">

                                $str='mokochoko.png';<br>
                                $n_s_rev=substr($str,-4);<br>
                                if($n_s_rev==".png"){<br>
                                echo "Yes!";<br>
                                } else if ($n_s_rev===".jpg"){<br>
                                echo "Great, Yes!";<br>
                                } else{<br>
                                echo "Sorry, but No!";
                                }

                            </div>
                        </div>


                        <h3>Завдання 7.</h3> Дана строка <b>Якщо в цьому рядку більше 5-ти символів - виведіть з нього
                            перші 5 символів, додайте
                            троєточки в кінець і виведіть на екран. Якщо в цьому рядку 5 і менше символів - просто
                            виведіть цей
                            рядок на екран.<br>

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