<?php

/*1 задание*/
session_start();
$_SESSION['count'];
if ($_POST['plus']){
    $_SESSION['count']+=1;
}
if ($_POST['minus'])
{
    $_SESSION['count']-=1;
}
if ($_POST['close']){
    unset($_SESSION['count']);
    session_destroy();
}
echo $_SESSION['count'];

/*setcookie("cook",$color,time()+3600);
print_r($_COOKIE);
$color=$_GET['color'];
print_r($_GET);
echo $color;*/

?>
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
<p>1.Удалить сессию при помощи специальной функции</p>
<form action="" method="post">
    <input type="submit" name="plus" value="+">
    <input type="submit" name="minus" value="-">
    <input type="submit" name="close" value="удалить сессию">
</form>

<p>2. К задаче с авторизацией добавить две страницы (fact.php, bitrix.php). Необходимо
    запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php). После
    авторизации пользователя, необходимо вывести на экран, какая страница была
    посещена последней.</p>

<p>3. Создайте список с выпадающим цветом. Задний фон сайта должен
    окрашиваться в выбранный цвет из списка. Если пользователе покинет
    сайт и заново войдет, нужно окрасить сайт в тот цвет, который был
    выбран последним.</p>
<form action="" method="get">
<select name="color">
    <option value="red">красный</option>
    <option value="blue">синий</option>
    <option value="yellow">желтый</option>
</select>
    <input type="submit">
</form>
</body>
</html>
