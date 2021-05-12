<?php

echo "1. Создайте функцию, которая принимает одномерный массив и возвращает
массив, заполненный случайными числами.<br>";
function arr($input)
{
    $i=mt_rand(1,5);
    for($g=0;$g<$i;$g++)
    {
        $input[$g]=mt_rand(0,100);
    }
    print_r($input);
}
$M=array();
arr($M);



echo "<br>2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая
посчитает количество слов строке.<br>";
function string($str)
{
    $arr=explode(", ",$str);
    echo count($arr);
}


$str="HTML, CSS, PHP, BITRIX";
string($str);

echo "<br>3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая
выведет в обратном порядке буквы («XIRTIB ,PHP … »).<br>";
function reverse_string($str)
{
    echo strrev($str);
}
reverse_string($str);


echo "<br>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию,
которая выведет на экран длину строки.<br>";
function line_length($str)
{
    echo "Длина строки - ".strlen($str);
}
line_length($str);

echo "<br>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию,
которая выведет каждую букву на новую строку<br>";
function letters($str)
{
    for($i=0;$i<strlen($str);$i++) {
        if (substr($str, $i, 1)==","){
            echo "";
        }
        else{
            echo substr($str, $i, 1) . "<br>";
        }
    }
}
letters($str);


echo "<br>*Написать функцию, которая рассчитывает последовательность
чисел Фибоначчи.<br>";
function fibonacci($n,$one = 1,$two = 1)
{
    $fib = [$one,$two];
    for($i=1;$i<$n-1;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    echo "Количество чисел - $n<br>";

    for ($j=0;$j<count($fib);$j++){
        echo $fib[$j]." ";
    }
}
fibonacci(10);
?>
