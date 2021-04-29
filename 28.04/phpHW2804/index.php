
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

    <title>ДЗ от 28.04.</title>
</head>
<body>
<section>
<div>
<p><b>1.Выведите столбец чисел от 5 до 13.</b></p>
<p>
<?
 for($i=5;$i<=13;$i++){
     echo $i."</br>";
 }
?>
</p>
</div>
</section>

<section>
<div>
<p><b>2.Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше
    50. Какое число получится? Посчитайте количество итераций, необходимых для этого
    (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</b></p>
<p>Цикл for</p>
<p>
    <?
    $num=1000;
    $j=0;
    for ($num=1000;$num>50;$j++){
        $num=$num/2;
    }
    echo "Полученное число-".$num;
    echo "</br>";
    echo "Количество итераций-".$j;
    ?>
</p>

<p>Цикл while</p>
<p>
    <?
    $num1=1000;
    $j1=0;
    while ($num1>50){
        $num1=$num1/2;
        $j1++;
    }
    echo "Полученное число-".$num1;
    echo "</br>";
    echo "Количество итераций-".$j1;
    ?>
</p>
</div>
</section>

<section>
<div>
<p><b>Необходимо создать переменную ($i) и передавать в нее значение. Если в
    переменную положить 0, то на экране должна отображаться строка со значением
    «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается
    строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране
    отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на
    экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</b></p>

<p>
    <?
    $n=10;
    while($n>=0){
        for ($g=0;$g<$n;$g++){
            echo $g.", ";
        }
        echo ($g);
        $n--;
        echo "</br>";
    }
    ?>
</p>
</div>
</section>

</body>
</html>