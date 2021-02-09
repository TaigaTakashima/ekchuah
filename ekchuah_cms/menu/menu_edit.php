<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//編集メニューの情報を変数に格納
$sql="SELECT * FROM menu LEFT JOIN category ON menu.category_id = category.category_id WHERE menu_id=".$_GET['menu_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $menu_list[] = $row;
}

//カテゴリーの情報を変数に格納
$sql="SELECT * FROM category";
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}

require_once './tpl/menu_edit.php';
?>

