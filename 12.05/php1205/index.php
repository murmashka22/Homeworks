<?
$id=(isset($_GET['id']) && (int)$_GET['id']) ? $_GET['id'] : 1;
echo $id;
?>
<img src="../image/<?echo $id;?>.png">
<a href="index.php?id=<?echo (($id<4) ? $id+1 : 1);?>">Вперёд</a>
<a href="index.php?id=<?echo (($id>1) ? $id-1 : 4);?>">Назад</a>
