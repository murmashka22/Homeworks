<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>как дела?</p>
<?include 'about_html.php'?><!--некритичная инфо-->

<p>какая погода</p>

<?include_once 'about_html.php'?><!--выводит лишь один раз, не допускает повторения-->
</body>
</html>


<?
$ARR1=array('яблоко','ананас','банан');/*старая запись массива*/

echo $ARR1[0]." ";
echo $ARR1[1]." ";
echo $ARR1[2]." ";


$ARR2[0]='a';
$ARR2[1]='b';
$ARR2[2]='c';
print_r($ARR2);

$ARR3=['клубника','смородина','клюква'];/*новая запись массива*/
print_r($ARR3);

echo "</br>";
echo "цикл и массивы";echo "</br>";
for ($i=0;$i<3;$i++)
{
    echo $ARR1[$i].' ';
}

echo "</br>";echo "</br>";

foreach ($ARR2 as $value){
    echo $value.' ';
}


echo "</br>";
echo "размер массива";echo "</br>";
for ($i=0;$i<count($ARR3);$i++)
{
    echo $ARR3[$i].' ';
}

echo count($ARR3);


echo "</br>";echo "</br>";echo "</br>";
$ARR4=array('яблоко','ананас','банан','киви','манго');

$a=count($ARR4);
$n=mt_rand(0,$a);/*длина массива равна 5, а нумерация массива идет от 0 до 4, соот-но если n выпадет на число 5, то в браузере ничего не отобразится*/
echo $a;
echo $n;
echo $ARR4[5];

$b=count($ARR4)-1; /*к значению а нужно было прибавить (-1)*/
echo $b;
?>


