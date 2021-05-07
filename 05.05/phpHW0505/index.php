<?php
echo "1. Дана строка. Если в этой строке более 5-ти символов - вырежете из нее первые 5 символов,
добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов -
просто выведите эту строку на экран. <br>";
$str="qwe";
if (mb_strlen($str)>5){
    echo mb_substr($str,0,5).'...'."<br>";
}
else{
    echo $str."<br>";
}

echo "2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.<br>";
$str1="aaabcabb";
$Str2 = str_replace(['a', 'b', 'c'], [1, 2, 3], $str1);
echo $str1."<br>";
echo $Str2."<br>";

echo "3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.<br>";
$str2="abc abc abc";
echo "позиция последней буквы 'b' - ".strrpos($str2,"b")."<br>";

echo "4. Дана строка 'html css php'. С помощью функции explode запишите каждое
слово этой строки в отдельный элемент массива.<br>";
$str3="html css php";
$ARR=explode(" ",$str3);
print_r($ARR);

echo "<br>5. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.<br>";
$date1 = date_create("10-01-2015");
$date2 = date_create("06-05-2021");
$difference = $date1->diff($date2);


echo $difference->y.' лет, <br>'
    .$difference->m.' месяцев, <br>'
    .$difference->d.' дней <br>';



$ARR1=array('Россия'=>'Москва','Англия'=>'Лондон');
$countries=array_keys($ARR1);
$city=array_values($ARR1);
print_r($ARR1);
$NEWARRAY=array();
$NEWARRAY["$countries[1]"]=$city[1];
$NEWARRAY["$countries[0]"]=$city[0];
echo "<br><br><br>";
print_r($NEWARRAY);
?>