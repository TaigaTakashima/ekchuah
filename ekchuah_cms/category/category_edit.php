<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//カテゴリーの情報を変巣に格納
$sql="SELECT * FROM category WHERE category_id =".$_GET['category_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}

require_once './tpl/menu_edit.php';
?>

