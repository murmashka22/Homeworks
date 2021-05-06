<?php

/*$str="<a href='../phpHW2804/index.php'>hello";
echo $str."<br>";
echo htmlspecialchars($str,ENT_QUOTES);
echo "<br>";
echo htmlspecialchars($str,ENT_COMPAT);
echo "<br>";*/

$str1="hello";
echo strtoupper($str1)."<br>";
$str1="HELLO";
echo strtolower($str1)."<br>";

echo md5($str1)."<br>";

print_r(str_split($str1,2));
echo "<br>";


$str2="FACT";
/*1 задание*/
$ARR=[];
$ARR[0]=mb_substr($str2,0,1);
$ARR[1]=mb_substr($str2,1,3);
print_r($ARR);
/*2 задание*/
print_r(str_split($str2,3));

/*1 задание*/
echo "<br>1. Дана строка «fact». Привести строку к виду «Fact».<br>";
$str3="fact";
$ARR1=str_split($str3,1);
$ARR1[0]=strtoupper($ARR1[0]);
print_r($ARR1);
echo implode($ARR1)."<br>";

/*2 задание*/
echo "2. Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к
виду «имя, фамилия». Например, исходная строка «Закирова Регина Артуровна»,
результирующая «Регина Закирова».<br>";

$str4="Починок Мария Владиславовна";
$ARR2=explode(" ",$str4);
echo $ARR2[1].' '.$ARR2[2]."<br>";

/*3 задание*/
echo "3. Дана строка «Привет, мир». Найти количество символа «и» в строке
(регистр учитывать).<br>";
$str5="ПрИвет, мир";
$ARR3=str_split($str5,2);
print_r($ARR3);
$n=0;
$m='Р';
for($i=0;$i<count($ARR3);$i++)
{
    if ($ARR3[$i]===$m){
     $n++;
    }
}
echo "количество символа «".$m."» в строке - ".$n;
echo "<br>";

/*4 задание*/
echo "4. Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово
'html', слово 'css' и слово 'php'.<br>";
$str6="html css php";
$ARR4=explode(" ",$str6);
echo $ARR4[0]."<br>";
echo $ARR4[1].' '.$ARR4[2]."<br>";

/*5 задание*/
echo "5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так,
выведите 'да', если не так - 'нет'.<br>";

$str7=",.png4";
$PNG=".png";
if (mb_substr($str7,-4,4)===$PNG){
    echo "все ок";
}
else {
    echo "плохо";
}
echo "<br>";
/*$txt = file_get_contents('f.txt'); // Прочитать содержимое файла
$c1 = substr_count($txt,'xxx'); // Найти кол-во xxx
$c2 = substr_count($txt,'yyy'); // Найти кол-во yyy*/

$txt = file_get_contents('text.txt');/*загружает текст*/
echo $txt."<br>";

/*убирает точки тире и тд*/
$txt1=str_replace(',',' ',$txt);
$txt2=str_replace('.',' ',$txt1);
$txt3=str_replace('?',' ',$txt2);
$txt4=str_replace(':',' ',$txt3);
$txt5=str_replace('-',' ',$txt4);
echo $txt5."<br>";


/*переводит в нижнему регистру все слова*/
$WORDS=explode(" ",$txt5);
for ($i=0;$i<count($WORDS);$i++){
    $WORDS[$i]=mb_strtolower($WORDS[$i]);
}
$TEXTT=implode(" ",$WORDS);


echo "<br>"."<br>"."<br>";

/*убирает повторы и восстанавливает порядок нумерации*/
$WORDS=array_values(array_unique($WORDS));
print_r($WORDS);


for($i=0;$i<count($WORDS);$i++){
    $c1=substr_count($TEXTT,$WORDS[$i]);
    echo "Слово «".$WORDS[$i]."» встречается ".$c1." раз<br>";
}


function hello(){
    $name="user";
    echo "hello, $name";
}
hello();
echo "<br>";
function hello1($name1){
    echo "hello, $name1";
}
$name2="Tom";
hello1($name2);
echo "<br>";
function sum($a,$b){
    echo $a+$b;
    return $a;
}
$a1=5;
$b1=10;
$d=sum($b1,$b1);
echo $d;
echo "<br>";
function print_a(){
    $a=5;
    echo $a;
}
echo "<br>";
$a=10;
echo $a;echo "<br>";
print_a();echo "<br>";
echo $a;echo "<br>";

function hello2($user='client'){
    switch ($user){
        case 'client': echo 'client'; break;
        case 'admin': echo 'admin'; break;
    }
}

$user='admin';
hello2();echo "<br>";
hello2($user);echo "<br>";


function f($x){
    return $x=$x*100;
}
$a=f(5)+f(20);
echo $a;echo "<br>";

function r($x){
if ($x<=5){
    echo $x."<br>";
    r($x+1);
}

}

r(1);
?>
