<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');



//selectにカテゴリーを表示

$sql="SELECT * FROM news";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $menu_list[] = $row;
}

require_once './tpl/news_list.php';
?>

