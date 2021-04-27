<?php

$name=" Мария";
$age="24";

define("Pi", "3.1415");

/*date_default_timezone_set('Australia/Adelaide');*/

$time=date( "H:i" );

$day="день";
$night="ночь";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>Приветики</title>
</head>
<body>

<div class="HW"><p>Меня зовут<?echo $name;?>, мне <?echo $age;?> года</p></div>

<div class="HW"><p>Константа пи-</p> <p><?echo Pi;?></p> </div>

<div class="HW"> <?echo "Время:".$time;?></div>

<div class="HW"><br> <?if($time>="08:00" && $time<"20:00")
    {
        echo $day;
        echo "<img src='image/1.jpg'>";
    }
    else
    {
        echo $night;
        echo "<img src='image/2.jpg'>";
    }
    ?>
    
    
 </div>

</body>
</html>