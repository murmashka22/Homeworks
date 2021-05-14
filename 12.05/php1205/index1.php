<?php
/*print_r($_GET);*/
/*if($_GET['login']=="Admin" && $_GET['password']=="1")
{
    echo 'пароль и логин верные';
}
else
{
    echo 'пароль и логин неверные';
}
echo "php1205/index1?L=".$_GET['L'];*/
print_r($_POST);
if (count($_POST)>0){
    $login=trim($_POST['login']);
    $comment=trim($_POST['comment']);
    if ($login==''){
        echo "пустой пароль";
    }
    else{
        file_put_contents('text.txt',$login." - ".$comment."\n",FILE_APPEND);
    }
}
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
<!--<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <button type="submit">Отправить</button>
</form>-->

<!--Первое задание-->
<!--<form action="" method="get">
    <p><b>Ваше имя:</b></p><br>
    <input type="text" name="name"><br>
    <p>Ваш возраст</p><br>
    <input type="radio" name="age" value="20">20<br>
    <input type="radio" name="age" value="21">21<br>
    <input type="radio" name="age" value="22">22<br>
    <p>Ваши любимые цвета</p><br>
    <input type="checkbox" name="color[]" value="red">красный<br>
    <input type="checkbox" name="color[]" value="blue">синий<br>
    <input type="checkbox" name="color[]" value="green">зеленый<br>
    <input type="checkbox" name="color[]" value="yellow">желтый<br>
    <button type="submit">Отправить</button>
</form>-->


<!--Второе задание-->
<!--<form action="" method="get">
    <p>Логин</p>
    <select name="login" id="1">
        <option>Admin</option>
        <option>AdmiN</option>
        <option>AdMiN</option>
    </select>
    <p>Пароль</p>
    <select name="password" id="2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <button type="submit">ОТПРАВИТЬ</button>
</form>-->

<!--Третье задание-->
<!--<form action="" method="get">
    <select name="L" id="">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
    </select>
    <button type="submit">отправить</button>
</form>-->

<form action="" method="post">
    <input type="text" name="login">
    <textarea name="comment"> </textarea>
    <button type="submit">отправить</button>
</form>
</body>
</html>
