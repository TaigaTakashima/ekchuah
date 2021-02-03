<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');
session_start();

//カテゴリーの情報を変数に格納
$sql="SELECT * FROM category WHERE category_id =".$_GET['category_id'];
$ret = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($ret)) {
    $category_list[] = $row;
}
foreach($category_list as $item){
    $category_name = $item['category_name'];
    $_SESSION['category_id'] = $item['category_id'];
}

require_once './tpl/category_delete.php';
?>

