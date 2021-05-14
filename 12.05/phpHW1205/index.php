<?

/*1 задание*/
/*print_r($_POST);
$login=$_POST['login'];
$comment=$_POST['comment'];
mail('hello@example.com','Ваши данные','Ваш логин - '.$login."\nВаш комментарий - ".$comment, 'From: hello1@example.com')*/

/*2 задание*/
/*Логин - admin*/
/*Пароль - 123*/
/*if (md5($_POST['login'])==='21232f297a57a5a743894a0e4a801fc3'){
    echo "Правильный логин! :)";
}
else{
    echo "попробуй еще раз :(";
}
if (md5($_POST['password'])==='202cb962ac59075b964b07152d234b70'){
    echo "\nПравильный пароль! :)";
}
else{
    echo "\nпопробуй еще раз :(";
}*/


/*3 задание*/
$NAME=$_GET['name'];
$j=0;
for ($i=1;$i<=count($_GET)-1;$i++)
{
    $j=$j+$_GET["question".$i];
}
echo $j;
if ($j>=15){
    $answer="У Вас покладистый характер";
}
elseif ($j<15 && $j>8)
{
    $answer="Вы не лишены недостатков, но с вами можно ладить";
}
else{
    $answer="Вашим друзьям можно посочувствовать";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ДЗ 12.05</title>
</head>
<body>

<p>1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
</p>
<form action="" method="post">
    <p>Логин:</p>
    <input type="text" name="login">
    <p>Комментарий:</p>
    <textarea name="comment"> </textarea>
    <button type="submit">Отправить на почту!</button>
</form>

<p>2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
</p>
<form action="" method="post">
    <p>Логин:</p>
    <input type="text" name="login">
    <p>Пароль:</p>
    <input type="password" name="password">
    <button type="submit">Отправить</button>
</form>

<p>3. Анкета</p>
<form action="" method="get">
    <p>Ваше имя:</p>
    <input type="text" name="name">

    <p>1. Считаете ли Вы, что у многих ваших знакомых хороший характер?</p>
    <input type="radio" name="question1" value="0" checked>да
    <input type="radio" name="question1" value="1">нет

    <p>2. Раздражают ли Вас мелкие повседневные обязанности?</p>
    <input type="radio" name="question2" value="0" checked>да
    <input type="radio" name="question2" value="1">нет

    <p>3. Верите ли Вы, что ваши друзья преданы Вам?</p>
    <input type="radio" name="question3" value="1" checked>да
    <input type="radio" name="question3" value="0">нет

    <p>4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</p>
    <input type="radio" name="question4" value="0" checked>да
    <input type="radio" name="question4" value="1">нет

    <p>5. Способны ли Вы ударить собаку или кошку?</p>
    <input type="radio" name="question5" value="0" checked>да
    <input type="radio" name="question5" value="1">нет

    <p>6. Часто ли Вы принимаете лекарства?</p>
    <input type="radio" name="question6" value="0" checked>да
    <input type="radio" name="question6" value="1">нет

    <p>7. Часто ли Вы меняете магазин, в который ходите за продуктами?</p>
    <input type="radio" name="question7" value="0" checked>да
    <input type="radio" name="question7" value="1">нет

    <p>8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</p>
    <input type="radio" name="question8" value="0" checked>да
    <input type="radio" name="question8" value="1">нет

    <p>9. Тяготят ли Вас общественные обязанности?</p>
    <input type="radio" name="question9" value="1" checked>да
    <input type="radio" name="question9" value="0">нет

    <p>10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</p>
    <input type="radio" name="question10" value="1" checked>да
    <input type="radio" name="question10" value="0">нет

    <p>11. Часто ли Вам приходят в голову мысли о Вашей невезучести?</p>
    <input type="radio" name="question11" value="0" checked>да
    <input type="radio" name="question11" value="1">нет

    <p>12. Сохранилась ли у Вас фигура по сравнению с прошлым?</p>
    <input type="radio" name="question12" value="0" checked>да
    <input type="radio" name="question12" value="1">нет

    <p>13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</p>
    <input type="radio" name="question13" value="1" checked>да
    <input type="radio" name="question13" value="0">нет

    <p>14. Нравится ли Вам семейная жизнь?</p>
    <input type="radio" name="question14" value="1" checked>да
    <input type="radio" name="question14" value="0">нет

    <p>15. Злопамятны ли Вы?</p>
    <input type="radio" name="question15" value="0" checked>да
    <input type="radio" name="question15" value="1">нет

    <p>16. Находите ли Вы, что стоит погода, типичная для данного времени года?</p>
    <input type="radio" name="question16" value="0" checked>да
    <input type="radio" name="question16" value="1">нет

    <p>17. Случается ли Вам с утра быть в плохом настроении?</p>
    <input type="radio" name="question17" value="0" checked>да
    <input type="radio" name="question17" value="1">нет

    <p>18. Раздражает ли Вас современная живопись?</p>
    <input type="radio" name="question18" value="0" checked>да
    <input type="radio" name="question18" value="1">нет

    <p>19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?</p>
    <input type="radio" name="question19" value="1" checked>да
    <input type="radio" name="question19" value="0">нет

    <button type="submit">Отправить</button>
</form>

<p>Ваш результат:</p>
<p><b>Имя:<?echo " ".$NAME?>, баллы:<?echo " ".$j?>, комментарий:<?echo " ".$answer?></b></p>


</body>
</html>