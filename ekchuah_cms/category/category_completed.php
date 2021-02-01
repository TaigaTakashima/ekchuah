<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//カテゴリー登録
if (isset($_GET['input'])) {
    $sql = "INSERT into category (category_name) VALUES ('".$_GET['category_name']."')";
    mysqli_query($link, $sql);
    mysqli_close($link);
}

//カテゴリー編集
if (isset($_GET['edit'])) {
    $sql = "UPDATE category SET category_name='".$_GET['category_name']."' WHERE category_id=".$_GET['category_id'];
    mysqli_query($link, $sql);
    mysqli_close($link);
}

require_once './tpl/category_completed.php';
?>

