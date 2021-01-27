<?php
$link = mysqli_connect('localhost', 'root', '', 'ekchuah');
mysqli_set_charset($link, 'utf8');

//カテゴリー登録
if (isset($_GET['category_name'])) {
    $sql = "INSERT into category (category_name) VALUES ('".$_GET['category_name']."')";
    mysqli_query($link, $sql);
    mysqli_close($link);
}

require_once './tpl/category_complete.php';
?>

