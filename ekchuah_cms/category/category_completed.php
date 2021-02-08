<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//カテゴリー登録
if (isset($_GET['input'])) {
    $sql = "INSERT into category (category_name) VALUES ('".$_GET['category_name']."')";
    mysqli_query($link, $sql);
    mysqli_close($link);
    $reg = 1;
}

//カテゴリー編集
if (isset($_GET['edit'])) {
    $sql = "UPDATE category SET category_name='".$_GET['category_name']."' WHERE category_id=".$_GET['category_id'];
    mysqli_query($link, $sql);
    mysqli_close($link);
    $reg = 1;
}

//カテゴリー削除
if (isset($_GET['delete'])) {
    session_start();
    $sql_delete = "DELETE FROM `category` WHERE category_id =".$_SESSION['category_id'];
    $sql_edit = "UPDATE menu SET category_id = 0 WHERE category_id =".$_SESSION['category_id'];
    mysqli_query($link, $sql_delete);
    mysqli_query($link, $sql_edit);
    mysqli_close($link);
    $reg = 0;
}

require_once './tpl/category_completed.php';
?>

