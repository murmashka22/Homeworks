
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>ДЗ от 30.04</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<p>Создать массив размера n, заполненный случайными числами. Вывести
    каждый элемент массива с новой строки. Все четные элементы массива
    необходимо вывести жирным шрифтом.</p>
<p><?php
$n=10;
for($i=0;$i<$n;$i++){
    $ARR[$i]=mt_rand(0,40);
}
$m=count($ARR);
for($i=0;$i<$m;$i++){
    if($ARR[$i]%2 === 0){
        echo '№'.$i.' Число четное <b>'.$ARR[$i].'</b></br>';
    }
    else {
        echo '№'.$i.' Число нечетное <i>'.$ARR[$i].'</i></br>';
    }
}
print_r($ARR);
?></p>


<p>Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.</p>
<p><?
    $ARR1=array(0=>[1,2,3,0,0,0],1=>[4,5,6],2=>[7,8,9]);
    print_r($ARR1);
    echo "</br> Количество элементов в массиве (с учетом ключей) -".count($ARR1,COUNT_RECURSIVE);
    $g=count($ARR1);
    for($i=0;$i<$g;$i++){
        echo "</br> Количество элементов в ".$i." подмассиве - ".count($ARR1[$i]);
    }
    ?>
</p>

</body>
</html>
